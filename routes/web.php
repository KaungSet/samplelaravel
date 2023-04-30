<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RetailerController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\GuessController;
use App\Http\Controllers\CarbontestController;

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
    Route::post('retailer/store',[RetailerController::class, 'store'])->name('retailer-store');

    //Shop
    Route::get('shop',[ShopController::class, 'index'])->name('shop');
    Route::get('shop/create',[ShopController::class, 'create'])->name('shop-create');

    //Guess EPC ON/OFF
    Route::get('guess',[GuessController::class, 'index'])->name('guess');
    Route::post('calguess',[GuessController::class, 'calguess'])->name('calguess');

    //Laravel Carbon Date & Time Library
    Route::get('carbontest',[CarbontestController::class,'index'])->name('carbontest');
    Route::post('caldate',[CarbontestController::class,'caldate'])->name('caldate');
});



