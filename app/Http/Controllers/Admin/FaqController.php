<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Faq::all();

        return view('admin.faq.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');

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
        $add = Faq::Create($data);
        if($add)
        {
            return redirect()->route('faq.index')->with(['message'=>'FAQ added successfully','type'=>'success']);
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
        $faq = Faq::find($id);
        return view('admin.faq.edit',compact('faq'));    }

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
        $faq = Faq::find($id);
        $add =  $faq->update($data);
        if($add)
        {
            return redirect()->route('faq.index')->with(['message'=>'FAQs updated successfully','type'=>'success']);
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
    public function destroy(Faq $faq)
    {
        try {
            //code...
            Faq::find($faq->id)->delete();
            return redirect()->route('faq.index')
                            ->with(['message'=>'Category delete successfully','type'=>'success']);
        } catch (\Throwable $th) {
            return redirect()->route('faq.index')
            ->with(['message'=>'Please Try Again','type'=>'error']);

        }
    }
    public function change_status(Request $request)
    {
        $statusChange = Faq::where('id',$request->id)->update(['status'=>$request->status]);
        if($statusChange)
        {
            return array('message'=>'Category status  has been changed successfully','type'=>'success');
        }else{
            return array('message'=>'Category status has not changed please try again','type'=>'error');
        }

    }
}
