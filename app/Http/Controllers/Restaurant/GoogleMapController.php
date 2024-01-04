<?php

namespace App\Http\Controllers\Restaurant;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Order;



class GoogleMapController extends Controller
{
    public function googleMap(Request $request,$id){
         
        $locations = Location::all(); 
        $order = Order::find($id);
        return view('admin.orders.googleMap',compact('locations','order'))->with('Success','order time is set');
    }
    
}
