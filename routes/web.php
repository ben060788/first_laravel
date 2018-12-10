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
//laravel預設首頁
Route::get('/', function () {
    return view('welcome');
});

//顯示phpinfo()
Route::get('/index', function () {
    return view('frontend.index');
});
//參數傳遞
Route::get('/param', function () {
    return view('frontend.hello', ['name' => 'Ben', 'years' => '23']);
});

//bootstrap index2
Route::get('/index2', function () {
    return view('frontend.index2');
})->name('home');
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');
Route::get('/product', function () {
    return view('frontend.product');
})->name('product');
Route::get('/store', function () {
    return view('frontend.store');
})->name('store');
