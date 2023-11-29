<?php

use Illuminate\Support\Facades\Route;
// For Admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserPatternController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\InvoiceController;
/* Restaurant Controller  */
use App\Http\Controllers\Restaurant\CategoryController;
use App\Http\Controllers\Restaurant\ItemMenuController;
use App\Http\Controllers\Restaurant\ProductController;
use App\Http\Controllers\Restaurant\StockListController;
use App\Http\Controllers\Restaurant\BespokeMealController;
use App\Http\Controllers\Restaurant\GoogleMapController;



/* Website */
use App\Http\Controllers\Website\PagesController;
// For User
use App\Http\Controllers\User\UserController as UController;
use App\Http\Controllers\Admin\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();






Route::controller(\App\Http\Controllers\AuthController::class)->group(function () {

   route::get('/login','user_login')->name('login')->middleware('guest');
   route::post('loginAdminProcess','loginAdminProcess')->name('loginAdminProcess') ;

   route::get('user-register','userRegister')->name('user-register')->middleware('guest');
   route::post('user-register-process','RegisterProcess')->name('user-register-process');
   Route::get('/google-map', [GoogleMapController::class, 'googleMap'])->name('googleMap');

   Route::get('forgot-password', 'forgotPasswords')->name('forgot-password');
   Route::post('forgotPassword', 'forgotPassword')->name('forgotPassword');
   Route::post('updatePassword', 'updatePassword')->name('updatePassword');
   route::get('resetpassword/{id}','resetpassword')->name('resetpassword');
   Route::any('save-token', 'saveToken')->name('save.token');

});


/* Website Routes */
Route::controller(PagesController::class)->group(function () {
    Route::get('/','index')->name('index');
    Route::get('/about-us','aboutUs')->name('about_us');
    Route::get('/diet-plan','dietPlan')->name('diet.plan');
    Route::get('/Meal-Assessment','mealAssessment')->name('meal.assessment');
    Route::get('/faq','faq')->name('faq');
    Route::get('/order_now','orderNow')->name('order.now');
    Route::get('/product-details','productDetail')->name('product.details');
    Route::get('get-cate-by-id', 'getCatById')->name('getCatByID');
});


/* Admin Routes */
Route::middleware(['auth'])->prefix('admin')->group(function()
{
    Route::resource('category', CategoryController::class);
    Route::get('category-change-status', [CategoryController::class,'change_status'])->name('category.change.status');

    Route::resource('product', ProductController::class);
    Route::get('product-change-status', [ProductController::class,'change_status'])->name('product.change.status');
    Route::post('order-change-status', [OrderController::class,'change_status'])->name('order.change.status');

    Route::resource('stock_list', StockListController::class);
    Route::get('stock_list-change-status', [StockListController::class,'change_status'])->name('stock_list.change.status');

    Route::resource('items-menu', ItemMenuController::class);
    Route::post('/generate-pdf', [InvoiceController::class, 'generatePDF']);
    Route::resource('bespoke-meal', BespokeMealController::class);
    Route::get('bespoke-meal-change-status', [StockListController::class,'change_status'])->name('bespoke-meal.change.status');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('locations', LocationController::class);
    Route::resource('userspattern', UserPatternController::class);
    Route::resource('orders',OrderController::class);

    Route::get('user-change-status', [UserController::class,'change_status'])->name('admin-user-change-status');
    Route::controller(AdminController::class)->group(function ()
    {
        Route::get('dashboard', 'dashboard')->name('admin.dashboard');
        Route::get('profile', 'profile')->name('admin.profile');
        route::post('profile-update','profileUpdate')->name('profile-update');
    });

    Route::controller(UserController::class)->group(function ()
    {
        Route::get('staff', 'staff')->name('staff');
        Route::get('add-staff', 'create')->name('add-staff');
    });

    Route::controller(OrderController::class)->group(function ()
    {
        Route::get('sales', 'sales')->name('sales');
        Route::get('show-map','showMap')->name('show-map');
    });

});

Route::middleware(['auth','can:isUser'])->prefix('user')->group(function(){});

Route::middleware(['auth','can:isService'])->prefix('service-provider')->group(function(){});
Route::get('/get-locations', [LocationController::class, 'getLocations']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
