<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RetailerController;
use App\Http\Controllers\ShopController;

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
// Auth::routes(['register' => false]);
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/index', function () {
        return view('index');
    });

    //Retailer
    Route::get('retailer',[RetailerController::class, 'index'])->name('retailer');
    Route::get('retailer/create',[RetailerController::class, 'create'])->name('retailer-create');

    //Shop
    Route::get('shop',[ShopController::class, 'index'])->name('shop');
    Route::get('shop/create',[ShopController::class, 'create'])->name('shop-create');
});



