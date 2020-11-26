<?php

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
    return view('dashboard.index');
});

Route::resource('customer', 'CustomerController');
Route::resource('item', 'ItemController');
Route::resource('brand', 'BrandController');
Route::resource('category', 'CategoryController');
Route::resource('order', 'OrderController');