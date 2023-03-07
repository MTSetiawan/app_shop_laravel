<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('shop', [
        "title1" => "Mobile Legends",
        "title2" => "Free Fire",
        "daftar" => "masuk dengan Facebook",
    ]);
});

Route::get('/facebook', function () {
    return view('facebook');
});

Route::get('/google', function () {
    return view('google');
});

Route::get('/checkout', function () {
    return view('checkOut');
});
