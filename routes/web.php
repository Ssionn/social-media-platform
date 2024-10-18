<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth.login.authenticate');

Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'register'])->name('auth.register.store');

Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::prefix('/app')->group(function () {
    Route::get('/', function () {
        return view('homepage');
    })->name('home');

    Route::middleware(['auth'])->group(function () {
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    });
});
