<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('shop.about');
});

Route::get('contact', function () {
    return view('shop.contact');
});


Route::get('jewellery', function () {
    return view('shop.jewellery');
});
Route::get('index', function () {
    return view('bill.index');
});

Route::get('create', 'App\Http\Controllers\Bill\BillController@create');
Route::post('store', 'App\Http\Controllers\Bill\BillController@store');

