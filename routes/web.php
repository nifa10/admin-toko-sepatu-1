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

Route::get('/item', function () {
    return view('items.index');
});

Route::get('/brand', function () {
    return view('settings.brands.index');
});

Route::get('/category', function () {
    return view('settings.categories.index');
});

Route::get('/customer', function () {
    return view('customers.index');
});
