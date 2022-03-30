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
Route::get('/lang/{lang}', function ($lang) {
    Session::put('locale', $lang);
    return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/terms-and-conditions', function () {
    return view('terms');
})->name("terms");

Route::get('/passport/refugio', function () {
    return view('/components/QR/refugio-qr');
})->name("refugio-qr");

Route::get('/passport/carenero', function () {
    return view('/components/QR/carenero-qr');
})->name("carener-qr");

Route::get('/passport/bocas', function () {
    return view('/components/QR/bocas-qr');
})->name("bocas-qr");

Route::get('/passport/panama', function () {
    return view('/components/QR/panama-qr');
})->name("panama-qr");


Route::get('/telegram', function () {
  $url = 'https://t.me/bocasdao';
  return Redirect::to($url);
})->name("telegram");;
