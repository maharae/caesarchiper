<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DashboardController;

// Halaman Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/daftar_pengguna', [PenggunaController::class, 'index']);

// Route Cipher Anda
Route::get('/', [\App\Http\Controllers\CipherController::class, 'index']);
Route::post('/process', [\App\Http\Controllers\CipherController::class, 'process']);

// // Proteksi Dashboard
// Route::get('/dashboard', function () {
//     if (!session()->has('is_logged_in')) { //jika sesi user atau login tidak login maka dikembalikan ke login
//         return redirect('/dashboard'); //nama url
//     }
//     return view('daftar_pengguna'); //mengarahkan kemana urlnya
// })->name('login');
