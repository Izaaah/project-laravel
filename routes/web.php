<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;

Route::middleware(['auth'])->group(function () {
    Route::resource('articles', ArticleController::class);
    Route::resource('users', UserController::class);
});

