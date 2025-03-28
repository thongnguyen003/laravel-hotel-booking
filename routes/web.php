<?php

use Illuminate\Support\Facades\Route;

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
