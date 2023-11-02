<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;

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

    public function getCartData(){
        try {

            $user_id = auth()->id();
            $data['cart'] = Cart::where('user_id',$user_id)->with('product')->get();
            if (!isset($data['cart'][0])) {
                return $data = [];
            }
            $data['subtotal'] = $this->numberFormate($data['cart']->sum('amount'),2);
            $data['tax'] = $this->numberFormate($data['subtotal'] * 0,2);
            $data['total'] = $this->numberFormate($data['subtotal']+$data['tax'],2);
            return $data;

        } catch (\Throwable $th) {
            return $data = [];
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
            $order_item['product_id'] = $value->product_id??0;
            $order_item['qty'] = $value->qty??0;
            OrderItem::create($order_item);
            Cart::find($value->id)->delete();
        }
        return $this->sendResponse("Place A Order Successfully");
        try {
        } catch (\Throwable $th) {
            return $this->sendError('SomeThing went wrong.');
        }
    }
    /* Cart Methods  */
    public function cart(){
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
        $validator = Validator::make($request->all(), [
            'product_id' => 'required',

        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors()->first());

        }
        try {
            $product = Product::where('id',$request->product_id)->first();
            if (!isset($product)) {
                return $this->sendError('Invalid Product id');
            }
            $cart_history = Cart::where('product_id',$request->product_id)->first();
            $qty = $request->qty??1;
            $old_qty = $cart_history->qty??0;
            $total = ($qty + $old_qty??0 ) * $product->price;
            if (isset($cart_history)) {

                if ($request->decrement == true) {
                    if ($old_qty < 2) {
                        return $this->sendError("Qty Should be Greater Than Zero");
                    }

                    $cart_history->decrement('qty',$qty);
                    $cart_history->update([
                        'amount'=> $total
                    ]);
                    return $this->sendResponse($cart_history,"Update Cart Successfully");
                }
                $cart_history->increment('qty',$qty);
                $cart_history->update([
                    'amount'=> $total
                ]);
                return $this->sendResponse($cart_history,"Update Cart Successfully");
            }
            $cart['amount'] =$total;
            $cart['user_id'] = auth()->id();
            $cart['product_id'] = $request->product_id;
            $cart['qty'] =  $qty;
            $add_cart = Cart::create($cart);

            return $this->sendResponse($add_cart,"Added to Cart Successfully");
        } catch (\Throwable $th) {
            return $this->sendError('SomeThing went wrong.');
        }
    }
}
