<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;

Route::middleware(['auth'])->group(function () {
    Route::resource('articles', ArticleController::class);
    Route::resource('users', UserController::class);
});

Route::get('/registrasi', function () {
    return view('auth.register');
})->name('registrasi');

// Route::get('/registrasi', [auth::class, 'index'])->name('registrasi');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/', function () {
    return view('dashboard.home');
})->name('home');
