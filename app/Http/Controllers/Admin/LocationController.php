<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    function __construct()
    {
        //  $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','show']]);

         $this->middleware('permission:location-address-list', ['only' => ['index']]);
         $this->middleware('permission:location-address-create', ['only' => ['create','store']]);
         $this->middleware('permission:location-address-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:location-address-delete', ['only' => ['destroy']]);
         
    }
    public function index()
    {
        $data = Location::get();
        return view('admin.locations.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['house_address'] = $request->address;
        $add = Location::Create($data);
        
        if($add)
        {
            return redirect()->route('locations.index')->with(['message'=>'Location Address added successfully','type'=>'success']);
        }else{
            return redirect()->back()->with(['message'=>'Something went wrong!','type'=>'error']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::find($id);
        return view('admin.locations.edit',compact('location'));
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
        $data = $request->all();
        $location = Location::find($id);
        $data['house_address'] = $request->address;
        $add =  $location->update($data);
        if($add)
        {
            return redirect()->route('locations.index')->with(['message'=>'Location Address updated successfully','type'=>'success']);
        }else{
            return redirect()->back()->with(['message'=>'Something went wrong!','type'=>'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::find($id);
        $add =  $location->delete();
        if($add)
        {
            return redirect()->route('locations.index')->with(['message'=>'Location Address deleted successfully','type'=>'success']);
        }else{
            return redirect()->back()->with(['message'=>'Something went wrong!','type'=>'error']);
        }
    }
    public function getLocations()
    {
        $locations = Location::pluck('house_address'); 
        return response()->json($locations);
    }
}
