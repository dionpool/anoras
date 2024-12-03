<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

/**
 * Authentication routes
 */
Route::get('/creation', [RegisterController::class, 'index'])->middleware(['guest'])->name('creation');
Route::post('/creation', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->middleware(['guest'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::post('/logout', [LoginController::class, 'destroy'])->middleware(['auth']);

/**
 * Account routes
 */
Route::get('/overview', [AccountController::class, 'index'])->middleware(['auth'])->name('overview');
Route::get('/account', [AccountController::class, 'show'])->middleware(['auth'])->name('account');
