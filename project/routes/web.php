<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;

use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class,'index']);
Route::get('/home', function () {
    return view('home.welcome');
});
Route::get('/explore', function () {
    return view('explore.index');
});
Route::get('/favorites', function () {
    return view('favorites.index');
});
Route::get('/orders', function () {
    return view('orders.index');
});
Route::get('/setting', function () {
    return view('settings.index');
});
Route::get('/login', [UserController::class,'index']);
Route::post('/login', [UserController::class,'store'])->name("login");

Route::get('/register', function () {
    return view('login-register.register');
});
Route::post('/register', [UserController::class,'Register'])->name("register");

Route::get('/forgot', function () {
    return view('login-register.forgot');
})->name('forgot');

Route::post('forget/password/reset', [UserController::class, 'resetPassword'])->name('password.reset');

Route::get('/email/connaction', [UserController::class,'TestController'])->name('email.connaction');
Route::get('/send/email', [MailController::class,'index'])->name('send.email');


