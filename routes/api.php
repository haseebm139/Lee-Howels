<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('forget-password', [AuthController::class, 'forgetPassword']);
Route::post('update-forget-password', [AuthController::class, 'updateForgetPassword']);
Route::get('clear',[AuthController::class,'clearCache']);
Route::post('googleLogin',[AuthController::class,'googleLogin']);


// Authorized API's
Route::middleware(['auth:api'])->group(function () {
    Route::post('update-profile', [AuthController::class, 'updateProfile']);
    Route::get('/my-profile', [AuthController::class, 'myProfile']);
    Route::controller(ProductController::class)->group(function () {

        Route::get('/categories','categories');
        Route::get('/products','products');
        Route::get('/cart','cart');
        Route::get('/orders','orders');
        Route::get('/product-details/{id}','productDetails');
        Route::post('/similar-products','similarProducts');
        Route::get('/order/{id}','order');
        Route::POST('/add-cart','addCart');
        Route::get('/get_base_protein_extra','GetStockList');
        Route::POST('/place-order','placeOrder');
        Route::POST('/add-bespoken-product','addBespokenProduct');

    });

});





// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
