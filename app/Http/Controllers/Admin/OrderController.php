<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status_list = [];
        if(auth()->user()->roles[0]->name === 'front-counter-admin'){
            $status_list = ['pending'];
        }elseif(auth()->user()->roles[0]->name === 'kitchen-admin'){
            $status_list = ['accept'];
        }elseif(auth()->user()->roles[0]->name === 'delivery-admin'){
            $status_list = ['ready'];
        }elseif(auth()->user()->roles[0]->name === 'admin'){
            $status_list = ['pending','accept','ready','delivering','cancel','complete'];
        }
        $orders = Order::with(['users:id,name,profile'])->whereIn('status',$status_list)->get();
        return view('admin.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return $id;
        $order = Order::with(['items.products','items.customize_product','users:id,name,profile,address,state,city,email'])->where('id',$id)->first();
        return view('admin.orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function change_status(Request $request)
    {
        try {
            $order = Order::findOrFail($request->id);

            // Check if the logged-in user has the required role to change the status
            if (auth()->user()->roles[0]->name === 'admin' || (auth()->user()->roles[0]->name === 'kitchen-admin' && $request->status === 'ready')) {
                $order->status = $request->status;
                $order->save();

                return redirect()->back()
                ->with(['message'=>'Order status has been updated successfully.','type'=>'success']);
            } else {
                return redirect()->back()
                ->with(['message'=>'Unauthorized to change the order status.','type'=>'success']);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error updating order status.', 'type' => 'error']);
        }
    }
}
