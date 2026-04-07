<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Halaman Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Proteksi Dashboard Tanpa Embel-embel Auth Laravel
Route::get('/dashboard', function () {
    if (!session()->has('is_logged_in')) {
        return redirect('/login');
    }
    return view('dashboard');
})->name('dashboard');

// Route Cipher Anda
Route::get('/', [\App\Http\Controllers\CipherController::class, 'index']);
Route::post('/process', [\App\Http\Controllers\CipherController::class, 'process']);
