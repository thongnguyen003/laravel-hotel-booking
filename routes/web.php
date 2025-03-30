<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/booked', function () {
    return view('pages.booked');
});

Route::get('/mark', function () {
    return view('pages.mark');
});

Route::get('/markup', function () {
    return view('pages.mark');
});


Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
