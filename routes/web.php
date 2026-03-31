<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard/bph');
});

Route::get('/login', function () {
    return view('autentikasi/login');
});
