<?php

use Illuminate\Support\Facades\Route;


// =====================
// HOME
// =====================
Route::get('/', function () {
    return view('index');
});

// =====================
// AUTHENTIKASI
// =====================
Route::get('/login', function () {
    return view('autentikasi.login');
});

Route::get('/register', function () {
    return view('autentikasi.register');
});

Route::get('/riset', function () {
    return view('autentikasi.riset');
});

// =====================
// DASHBOARD (PAKAI MIDDLEWARE)
// =====================

// Default dashboard (harus login)
Route::get('/dashboard', function () {
    return view('dashboard.user');
})->middleware('auth');

// BPH
Route::get('/dashboard/bph', function () {
    return view('dashboard.bph');
})->middleware('auth', 'role:bph');

// KOOR
Route::get('/dashboard/koor', function () {
    return view('dashboard.koor');
})->middleware('auth', 'role:koor');

// DEMIS
Route::get('/dashboard/demis', function () {
    return view('dashboard.demis');
})->middleware('auth', 'role:demis');

// USER
Route::get('/dashboard/user', function () {
    return view('dashboard.user');
})->middleware('auth', 'role:user');