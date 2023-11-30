<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetSecretController extends Controller
{
    public function getSecret()
    {
        return view('website.pages.get-secret');
    }
}
