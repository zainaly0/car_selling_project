<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/sign-up', [SignUpController::class, 'create'])->name('sing.up');

Route::get('/login', [LoginController::class, 'create'])->name('login');