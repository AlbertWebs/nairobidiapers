<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adult-diapers', [App\Http\Controllers\HomeController::class, 'adult'])->name('adult-diapers');
Route::get('/baby-diapers', [App\Http\Controllers\HomeController::class, 'baby'])->name('baby-diapers');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about-us');
Route::get('/wholesale', [App\Http\Controllers\HomeController::class, 'wholesale'])->name('wholesale');

Auth::routes();
