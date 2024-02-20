<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;

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
Route::get('/basket', [BasketController::class, 'showPage'])->name('basket');
Route::get('/about', [AboutController::class, 'showPage'])->name('about');
Route::get('/location', [LocationController::class, 'showPage'])->name('location');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('productPage');

Route::get('/auth/login', [LoginController::class, 'showPage'])->name('login');

Route::get('/auth/register', [BasketController::class, 'showPage'])->name('register');
Route::post('/auth/register', [BasketController::class, 'register']);