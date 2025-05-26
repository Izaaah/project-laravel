<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;

Route::middleware(['auth'])->group(function () {
    Route::resource('articles', ArticleController::class);
    Route::resource('users', UserController::class);
});

Route::get('/register', function () {
    return view('auth.register');
})->name('registrasi');

// Route::get('/registrasi', [auth::class, 'index'])->name('registrasi');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/profile', function () {
    return view('dashboard.landing');
})->name('profile');

Route::get('/', function () {
    return view('main_page.page');
})->name('user');

Route::get('/content', function () {
    return view('article.main_content');
})->name('content');

Route::get('/foto', function () {
    return view('article.main_foto');
})->name('foto');
