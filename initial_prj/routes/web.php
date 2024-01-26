<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;
use App\Http\Controllers\ExampleController;


Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/calc', [CalcController::class, 'showCalc'])->name('calc');
Route::post('/calc', [CalcController::class, 'calculate']);

Route::get('/example', [ExampleController::class, 'showPage'])->name('example');