<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use DB;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $orders = Order::with('users:id,name,last_name,profile')->get();
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
        $order = Order::with('items.products','users:id,name,last_name,profile,address,state,city,email')->where('id',$id)->first();
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

    public function sales()
    {
    //    return $orders =  Order::groupBy('date')->sum('total')->sum('tax');
      $orders = Order::selectRaw('DATE(created_at) as order_date, COUNT(*) as order_count, SUM(subtotal) as total_sub_total, SUM(tax) as tax, SUM(total) as total')
    ->withCount(['items as qty_count' => function ($query) {
        $query->select(DB::raw('SUM(qty)'));
    }])
    ->groupBy('order_date')
    ->orderBy('order_date', 'asc')
    ->get();
        return view('admin.orders.sales',compact('orders'));
    }

    public function showMap(Request $request)
    {
        // return $request->all();
         $orders = Order::whereDate('created_at',$request->date)->select('lat','long as lng')->get();
        return response()->json($orders);
    }
}
