<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(Request $request)
    {
        return view('website.pages.home');
    }

    public function aboutUs()
    {
        return view('website.pages.about_us');
    }
    public function dietPlan()
    {
        return view('website.pages.diet_plan');
    }

    public function mealAssessment()
    {
        return view('website.pages.meal_assessment');
    }

    public function faq()
    {
        return view('website.pages.faq');
    }
    public function orderNow()
    {
        return view('website.pages.order_now');
    }
    public function productDetail()
    {
        return view('website.pages.product-detail');
    }


}
