<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Faq;
class PagesController extends Controller
{
    public function index(Request $request)
    {
        $data['categories'] = Category::select('id','name')->with(['products' => function ($query) {
            $query->inRandomOrder()->take(13);
        }])
        ->inRandomOrder()
        ->limit(4)
        ->get();
        $data['products'] = Product::select('id', 'name', 'title', 'image','category_id')
        ->inRandomOrder()
        ->limit(7)
        ->get();
        return view('website.pages.home',compact('data'));
    }

    public function aboutUs()
    {
        return view('website.pages.about_us');
    }
    public function dietPlan()
    {
        $data['categories'] = Category::select('id','name')
        ->inRandomOrder()
        ->limit(7)
        ->get();
        $data['products'] = Product::select('id', 'name', 'title', 'image')
        ->inRandomOrder()
        ->limit(7)
        ->get();
        return view('website.pages.diet_plan',compact('data'));
    }

    public function mealAssessment()
    {
        return view('website.pages.meal_assessment');
    }

    public function faq()
    {
        $data = Faq::all();
        return view('website.pages.faq',compact('data'));
    }
    public function orderNow()
    {
        // $data['products'] = Product::with('category')->inRandomOrder()
        // ->limit(8)
        // ->get();
        $data['products'] = Product::with('category')->paginate(15);
        return view('website.pages.order_now',compact('data'));
    }
    public function productDetail($id)
    {
        $data['product'] = Product::with('category')->where('id',$id)->first();
        $data['product_all'] = Product::with('category')->inRandomOrder()
        ->limit(8)
        ->get();
        return view('website.pages.product-detail',compact('data'));
    }

    public function billingInformation()
    {

        return view('website.pages.billing-information');
    }
    public function getCatById(Request $request)
    {
        $cate_id =  $request->cate_id;
        $data['products'] = Product::select('id', 'name', 'title', 'image')
        ->where('category_id',$cate_id)
        ->inRandomOrder()
        ->limit(7)
        ->get();
        if ($request->page == 'home') {
            return view('website.pages.ajax.home_product_slider',compact('data'));
        }
        return view('website.pages.ajax.diet_product_list',compact('data'));
        # code...
    }



}
