<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/calc', [CalcController::class, 'showCalc'])->name('calc');
Route::post('/calc', [CalcController::class, 'calculate']);

Route::get('/example', [ExampleController::class, 'showPage'])->name('example');
Route::get('/shop', [ShopController::class, 'filteredPage'])->name('shop');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('productPage');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['guest'])->group(function () {
    Route::get('/auth/login', [LoginController::class, 'showPage'])->name('login');
    Route::post('/auth/login', [LoginController::class, 'login'])->name('login/post');

    Route::get('/auth/register', [RegisterController::class, 'showPage'])->name('register');
    Route::post('/auth/register', [RegisterController::class, 'register'])->name('register/post');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'show'])->name('cart');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('add');
});
