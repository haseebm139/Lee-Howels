<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
