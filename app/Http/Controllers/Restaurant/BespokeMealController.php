<?php

namespace App\Http\Controllers\Restaurant;
use App\Http\Controllers\Controller;

use App\Models\StockList;
use Illuminate\Http\Request;
use App\Models\Category;
use Str;
use Validator;

class BespokeMealController extends Controller
{
    public function index()
    {
        $data = StockList::with(['category'])->get();
        return view('admin.restaurant.bespokemeal.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status',1)->get();
        return view('admin.restaurant.bespokemeal.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'meal_type' => 'required',

        ]);
         if ($validator->fails()) {
             return redirect()->back()->with(['message'=>$validator->messages()->first(),'type'=>'error']);
            }
            $input = $request->except(['_token','image'],$request->all());
            $input['slug'] = Str::slug($request->item);
            StockList::create($input);
            return redirect()->route('bespoke-meal.index')->with(['message'=>"Create Successful",'type'=>'success']);
         try {

        }  catch (\Throwable $th) {
            return redirect()->back()->with(['message'=>"Something went wrong",'type'=>'error']);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StockList  $stockList
     * @return \Illuminate\Http\Response
     */
    public function show(StockList $stockList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StockList  $stockList
     * @return \Illuminate\Http\Response
     */
    public function edit(StockList $stockList,$id)
    {

         $stockList = StockList::find($id);
        $categories = Category::where('status',1)->get();
        return view('admin.restaurant.bespokemeal.edit',compact('categories','stockList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StockList  $stockList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $stockList = StockList::find($id);
        $input = $request->except(['_token','image'],$request->all());
        $input['slug'] = Str::slug($request->name);
        $stockList->update($input);
        return redirect()->back()->with(['message'=>"Update Successful",'type'=>'success']);
        try {

        }  catch (\Throwable $th) {
            return redirect()->back()->with(['message'=>"Something went wrong",'type'=>'error']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StockList  $stockList
     * @return \Illuminate\Http\Response
     */
    public function destroy(StockList $stockList,$id)
    {
        try {
            $stockList = StockList::find($id);
            $stockList->delete();
            return redirect()->back()->with(['message'=>"Delete Successful",'type'=>'success']);
        } catch (\Throwable $e) {
            return redirect()->back()->with(['message'=>"Something went wrong",'type'=>'error']);
        }
    }

    public function change_status(Request $request)
    {
        $statusChange = Category::where('id',$request->id)->update(['status'=>$request->status]);
        if($statusChange)
        {
            return array('message'=>'Category status  has been changed successfully','type'=>'success');
        }else{
            return array('message'=>'Category status has not changed please try again','type'=>'error');
        }

    }
}
