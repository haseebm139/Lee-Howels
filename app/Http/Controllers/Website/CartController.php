<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Models\Order;
use App\Models\OrderItem;

use Illuminate\Support\Facades\Validator;
class CartController extends Controller
{
    public function addCart(Request $request)
    {

        try {
            # code...
            \Cart::add(array(
                'id' => $request->id,
                'name' => $request->name,
                'price' => numberFormate($request->price,2),
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $request->image,

                )

            ));

            return array('message'=>'Add to Cart Successfully','type'=>'success');
        } catch (\Throwable $e) {
            return array('message'=>'Something went wrong','type'=>'error');
            # code...
        }
    }

    public function stripePost(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zipcode' => 'required|string',
            'payment_type' => 'required|string',
         ]);
         if ($validator->fails()) {
             return response()->json(['type' => 'error', 'message' => $validator->messages()->first()]);
         }
         $input = $request->except(['_token','amount','stripeToken'],$request->all());
         if (count(\Cart::getContent()) <= 0){
             return response()->json(['type' => 'error', 'message' => 'Cart is Empty']);
         }
        if ($request->payment_type === 'cod') {
            $this->storeOrder($input);
             return response()->json(['type' => 'success', 'message' => 'Order placed successfully with COD']);
        }
         // Handle Stripe payment
        if ($request->payment_type === 'stripe') {
             Stripe::setApiKey(config('services.stripe.secret'));
             $customer = \Stripe\Customer::create(array(

                "address" => [

                        "line1" => $request->address,
                        "postal_code" => $request->zip_code,
                        "city" => $request->city,
                        "state" => $request->state,
                        "country" => $request->country,
                    ],

                "email" => $request->email,
                "name" => $request->first_name,
                "source" => $request->stripeToken

             ));
             $stripe = \Stripe\Charge::create ([
                "amount" => $request->amount * 100,
                "currency" => "usd",
                "customer" => $customer->id,

        ]);
        $input['transaction_id'] = $stripe->id;
        $this->storeOrder($input);

             return response()->json(['type' => 'success', 'message' => 'Order placed successfully with Stripe']);
         }
        try {

        } catch (\Throwable $e) {
            # code...
            return response()->json(['type' => 'error', 'message' => 'Something Went wrong']);
        }

    }
    public function storeOrder($data){

        $data['total'] = \Cart::getTotal();
        $data['subtotal'] = \Cart::getSubTotal();
        $data['order_number'] ="#".time();
        // return $data;
        $order = Order::create($data);
        foreach (\Cart::getContent() as $key => $value) {

            $order_item['order_id'] = $order->id??0;
            $order_item['product_id'] = $value->id??null;
            $order_item['qty'] = $value->quantity??0;
            OrderItem::create($order_item);
        }

        \Cart::clear();
        return true;
    }

    public function getCart()
    {
        return \Cart::getContent();
    }
}
