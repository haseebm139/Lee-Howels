<?php

namespace App\Http\Controllers\Restaurant;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Googlemap;


class GoogleMapController extends Controller
{
    public function googleMap(Request $req){

        Googlemap::select()
                  ->where(['user_id'=>$req->user_id,'date'=>$req->date])->get();
     $setorders=new Googlemap;
     $setorders->user_id=$req->user_id;
     $setorders->name=$req->name;
     $setorders->location=$req->location;
     $setorders->latitude=$req->latitude;
     $setorders->longitude=$req->longitude;
     $setorders->order_time=$req->time;
     $setorders->distance_time=$req->dtime;
     $setorders->distance_km=$req->dkm;
     $setorders->date=$req->date;


     $setorders->save();
     return view('admin.orders.googleMap')->with('Success','order time is set');
    }
    
}
