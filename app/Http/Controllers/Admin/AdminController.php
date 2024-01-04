<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Order;
use DB;
use DataTables;
use Mail;
use Carbon\Carbon;
use Session;


class AdminController extends Controller
{


    public function dashboard(Request $request) {

        $status_list = [];
        if(auth()->user()->roles[0]->name === 'front-counter-admin'){
            $status_list = ['pending'];
        }elseif(auth()->user()->roles[0]->name === 'kitchen-admin'){
            $status_list = ['accept','in-process'];
        }elseif(auth()->user()->roles[0]->name === 'delivery-admin'){
            $status_list = ['ready','in-route'];
        }elseif(auth()->user()->roles[0]->name === 'admin'){
            $status_list = ['pending','accept','ready','delivering','cancel','complete','in-process','in-route'];
        }
        $orders['today'] = Order::with(['users:id,name,profile'])
        ->whereIn('status', $status_list)
        ->whereDate('created_at', today())
        ->get();

        $orders['future'] = Order::with(['users:id,name,profile'])
        ->whereIn('status', $status_list)
        ->whereDate('created_at', '>', today())
        ->get();
        return view('admin/dashboard',compact('orders'));
    }
    public function profile(Request $request) {
        return view('admin/profile');
    }
    public function profileUpdate(Request $request)
   {
        $user = User::find(auth()->user()->id);
        $input = $request->except(['profile','_token'],$request->all());

        if($request->hasFile('profile'))
        {
            $img = Str::random(20).$request->file('profile')->getClientOriginalName();
            $input['profile'] = 'documents/profile/'.$img;
            $request->profile->move(public_path("documents/profile/"), $img);
        }

        $user->update($input);

        return redirect()->back()
                ->with(['message'=>'Profile Update Successfully','type'=>'success']);
   }


}
