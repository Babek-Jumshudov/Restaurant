<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class, 'index']);
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
Route::prefix('/login')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store'])->name("login");

});
Route::prefix('/register')->group(function () {
    Route::get('/', function () {
        return view('login-register.register');
    });
    Route::post('/', [UserController::class, 'Register'])->name("register");

});
Route::prefix("/forgot")->group(function () {
    Route::get('/', function () {
        return view('login-register.forgot');
    })->name('forgot');

    Route::post('password/reset', [UserController::class, 'resetPassword'])->name('password.reset');
});
Route::group(['prefix' => '/email'], function () {
    Route::get('connaction', [UserController::class, 'TestController'])->name('email.connaction');
    Route::get('send', [MailController::class, 'index'])->name('send.email');

});
Route::group(['prefix' => '/adminPanel'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.user');
    Route::get('restaurant', [AdminController::class, 'create'])->name('restaurant');
    Route::delete('users/{user}', [AdminController::class, 'destroy'])->name('admin.delete');
    // Route::resource('users', UserController::class);
});
Route::group(['prefix'=> 'adminPanel/menu'], function () {
    Route::get('/', [ProductController::class, 'view'])->name('menu');
    Route::get('/add', [ProductController::class,'create'])->name('product.creat');
    Route::resource('product', ProductController::class);
});


