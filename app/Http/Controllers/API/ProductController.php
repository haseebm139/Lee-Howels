<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\StockList;
use App\Models\CustomizeProducts;

use Validator;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    public function categories(){
        try {
            $data = Category::get();
            return $this->sendResponse($data);
            //code...
        } catch (\Throwable $th) {
            return $this->sendError('SomeThing went wrong.');
        }
    }

    public function products(Request $request){
        try {
            $data = Product::query(); // Start building the query

            if ($request->has('category_id')) {
                $data->where('category_id', $request->category_id);
            }

            $results = $data->get();
            return $this->sendResponse($results);
            //code...
        } catch (\Throwable $th) {
            return $this->sendError('SomeThing went wrong.');
        }
    }

    public function addBespokenProduct(Request $request){
        $validator = Validator::make($request->all(), [
            'base_id' => 'required|numeric',
            'protein_id' => 'required|numeric',
            'vegetable_id' => 'required|numeric',
            'extra_topping_id' => 'required|numeric',
            'cal' => 'required|numeric',
            'carbs' => 'required|numeric',
            'fat' => 'required|numeric',
            'protein' => 'required|numeric',
            'price' => 'required',
            'schedule'=>'required',
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors()->first());

        }
        $item['base_id'] = $request->base_id;
        $item['protein_id'] = $request->protein_id;
        $item['vegetable_id'] = $request->vegetable_id;
        $item['extra_topping_id'] = $request->extra_topping_id;
        $item['cal'] = $request->cal;
        $item['carbs'] = $request->carbs;
        $item['fat'] = $request->fat;
        $item['protein'] = $request->protein;
        $item['price'] = $request->protein;
        $data = CustomizeProducts::Create($item);
        $schedule = json_decode($request->schedule);
        $this->AddSchedule($data->id,$schedule);

        return $this->sendResponse($data);
        try {
        } catch (\Throwable $e) {
            return $this->sendError('SomeThing went wrong.');
        }
    }

    public function AddSchedule($product_id,$schedule)
    {
        if ($schedule == 0) {
            return 0;
        }
        $scheduleLength = count($schedule);
        for ($i = 0; $i < $scheduleLength; $i++) {
            $item['product_id'] = $product_id;
            $item['date'] = $schedule[$i][0];
            $item['to'] = $schedule[$i][1];
            $item['from'] = $schedule[$i][2];

            ScheduleProduct::Create($item);
        }
        return 1;
    }
    public function GetStockList(Request $request){
        try {
            $stockList = StockList::get();
            $data['base']= $stockList->where('meal_type','base');
            $data['protein'] = $stockList->where('meal_type','protein');
            $data['vegetable'] = $stockList->where('meal_type','vegetable');
            $data['topping_extra'] = $stockList->where('meal_type','topping_extra');
            return $this->sendResponse($data);
        } catch (\Throwable $e) {
            return $this->sendError('SomeThing went wrong.');
        }
    }

    public function getCartData(){
        try {

            $user_id = auth()->id();
            $data['cart'] = Cart::where('user_id',$user_id)->with(['product','customize_product.base:id,name','customize_product.protein:id,name','customize_product.vegetable:id,name','customize_product.extra_topping:id,name'])->get();

            if (!isset($data['cart'][0])) {
                return $data = [];
            }
            $data['subtotal'] = numberFormate($data['cart']->sum('amount'),2);
            $data['tax'] = numberFormate($data['subtotal'] * 0,2);

            $data['total'] = numberFormate($data['subtotal']+$data['tax'],2);
            $data['total_items'] =  $data['cart']->count();
            return $data;

        } catch (\Throwable $th) {
            return $data = [];
        }
    }

    /* Cart Methods  */
    public function cart(){
        // $user_id = auth()->id();
        // return $shiw = Cart::where('user_id',$user_id)->with(['product','customize_product.base','customize_product.protein','customize_product.vegetable','customize_product.extra_topping'])->get();
         try {
            //code...
            $data = $this->getCartData();
            if (!isset($data['cart'][0])) {
                return $this->sendError('Cart is Empty');
            }
            return $this->sendResponse($data);

        } catch (\Throwable $th) {
            return $this->sendError('SomeThing went wrong.');
        }
    }
    public function addCart(Request $request){
        $product_id = null;
        $product = null;
        $cart_history = null;
        if ($request->product_id ) {
            $product_id = $request->product_id;
            $product = Product::where('id',$product_id)->first();
            $cart['product_id'] = $product_id;
            $cart_history = Cart::where('product_id',$product_id)->first();

        }
        if ($request->customize_product_id ) {
            $product_id = $request->customize_product_id;
            $product = CustomizeProducts::where('id',$product_id)->first();
            $cart['customize_product_id'] = $product_id;
            $cart_history = Cart::where('customize_product_id',$product_id)->first();

        }
        if (!$product_id) {
            return $this->sendError('The product id field is required.');
        }

        if (!isset($product)) {
            return $this->sendError('Invalid Product id');
        }

        $qty = $request->qty??1;
        $old_qty = $cart_history->qty??0;
        $total = ($qty + $old_qty??0 ) * $product->price;
        if (isset($cart_history)) {

            if ($request->decrement == true) {
                if ($old_qty <= 1 || ($old_qty -$qty <= 1)  ) {
                    $cart_history->update([
                        'qty'=>1
                    ]);
                    return $this->sendResponse($cart_history,"Quantity Should be Greater than 1");
                    return $this->sendError("Qty Should be Greater Than Zero");
                }

                $total = ( $old_qty - $qty  ) * $product->price;
                $cart_history->decrement('qty',$qty);
                $cart_history->update([
                    'amount'=> numberformate($total,2)
                ]);
                return $this->sendResponse($cart_history,"Update Cart Successfully");
            }
            $cart_history->increment('qty',$qty);
            $cart_history->update([
                'amount'=> numberformate($total,2)
            ]);
            return $this->sendResponse($cart_history,"Update Cart Successfully");
        }
        $cart['amount'] =numberformate($total,2);
        $cart['user_id'] = auth()->id();

        $cart['qty'] =  $qty;

        $add_cart = Cart::create($cart);

        return $this->sendResponse($add_cart,"Added to Cart Successfully");
        try {
        } catch (\Throwable $th) {
            return $this->sendError('SomeThing went wrong.');
        }
    }
    public function delCart(Request $request){
        $validator = Validator::make($request->all(), [
           'id' => 'required',
       ]);

       if($validator->fails()){
           return $this->sendError($validator->errors()->first());

       }
        try {
           //code...
           $id = $request->id;
           $cart = Cart::find($id);
           if($cart){
               $cart->delete();
               return $this->sendResponse("Item Removed");
           }
           return $this->sendError('Item not found');
       } catch (\Throwable $th) {
           return $this->sendError('SomeThing went wrong.');
       }
    }
    public function placeOrder(Request $request){
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'complete_address' => 'required',
            'transaction_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors()->first());

        }
        $cart = $this->getCartData();

        if (!isset($cart['cart'][0])) {
            return $this->sendError('Cart is Empty');
        }
        $order['first_name'] =$request->first_name??'';
        $order['last_name'] =$request->first_name??'';
        $order['email'] =$request->first_name??'';
        $order['phone'] =$request->phone??'';
        $order['address'] =$request->address??'';
        $order['city'] =$request->city??'';
        $order['state'] =$request->state??'';
        $order['zipcode'] =$request->zipcode??"";
        $order['complete_address'] =$request->complete_address??"";
        $order['transaction_id'] =$request->transaction_id??"";
        $order['user_id'] =auth()->id();
        $order['order_number'] ="#".time();

        $order['subtotal'] =$cart['subtotal'];
        $order['tax'] = $cart['tax'] ;
        $order['total'] =$cart['total'];
        $create_order = Order::create($order);

        foreach ($cart['cart'] as $key => $value) {

            $order_item['order_id'] = $create_order->id??0;
            $order_item['product_id'] = $value->product_id??null;
            $order_item['customize_product_id'] = $value->customize_product_id??null;
            $order_item['qty'] = $value->qty??0;
            OrderItem::create($order_item);
            Cart::find($value->id)->delete();
        }
        $notification =
        [
            'user_id' => auth()->id(),
            'title'     => 'Restaurant App',
            'body'   => auth()->user()->first_name??''.'Place A New Order'.$create_order->order_number??0,
            'sound'    =>'default'
        ];
        sendNotificationAdmin($notification);
        $notification = [
            'user_id' =>  auth()->id(),
            'is_for'=>'both',
            'title'=>'Restaurant App',
            'message'=>'Place A New Order'.$create_order->order_number??0,
            'noti_type'=>'new_order'
        ];
        createNotification($notification);
        return $this->sendResponse("Place A Order Successfully");
        try {
        } catch (\Throwable $th) {
            return $this->sendError('SomeThing went wrong.');
        }
    }

    /* Order Detail */
    public function orders(){
        try {
            # code...
            $user_id = auth()->id();
            $orders = Order::where('user_id',$user_id)->with('items')->get();
            return $this->sendResponse($orders);
        } catch (\Throwable $e) {
            return $this->sendError('Something went wrong');
        }
    }

    public function order($id){
        try {

            $order = Order::where('id',$id)->with('items')->first();
            return $this->sendResponse($order);
        } catch (\Throwable $e) {
            return $this->sendError('Something went wrong');
        }
    }

    public function productDetails(Request $request,$id){
        try {
            $data['product'] = Product::find($id);
            if(!isset($data)){

                return $this->sendError('SomeThing went wrong.');
            }
            $category_id = $data['product']->category_id;
            $data['similar_products'] = Product::where('category_id', $category_id)
            ->inRandomOrder()
            ->limit(5)
            ->get();
            return $this->sendResponse($data);
            //code...
        } catch (\Throwable $th) {
            return $this->sendError('SomeThing went wrong.');
        }
    }

    public function similarProducts(Request $request){
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors()->first());

        }
        try {
            $category_id = $request->category_id;
            $data = Product::where('category_id',$category_id)->get();
            return $this->sendResponse($data);

        } catch (\Throwable $th) {
            return $this->sendError('SomeThing went wrong.');
        }
    }



}
