<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('home');
});
Route::get('forgot', function () {
    return view('forgot-password');
});

Route::get('reset', function () {
    return view('reset-password');
});

Route::get('confirm', function () {
    return view('confirm-password');
});

Route::get('verify', function () {
    return view('verify-email');
});

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::post('login', [LoginController::class, 'authentication'])->name('authentication');
Route::post('register', [LoginController::class, 'registerCreate'])->name('registerCreate');
