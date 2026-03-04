<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('beranda');

Route::get('/about', function () {
    return view('about');
})->name('about.page');
