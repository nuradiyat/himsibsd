<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('index');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard/bph');
});

// Autentikasi
Route::get('/login', function () {
    return view('autentikasi/login');
});
Route::get('/register', function () {
    return view('autentikasi/register');
});
Route::get('/riset', function () {
    return view('autentikasi/riset');
});
