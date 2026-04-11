<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenggunaController;

// Halaman Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// // Proteksi Dashboard Tanpa Embel-embel Auth Laravel
// Route::get('/dashboard', function () {
//     if (!session()->has('is_logged_in')) { //jika sesi user atau login tidak login maka dikembalikan ke login
//         return redirect('/dashboard'); //nama url
//     }
//     return view('daftar_pengguna'); //mengarahkan kemana urlnya
// })->name('login');

// dashboard ke pengguna controller
Route::get('/dashboard', [PenggunaController::class, 'index'])->middleware(['auth'])->name('dashboard');

// daftar_pengguna
Route::get('/daftar_pengguna', [PenggunaController::class, 'index']);

// Route Cipher Anda
Route::get('/', [\App\Http\Controllers\CipherController::class, 'index']);
Route::post('/process', [\App\Http\Controllers\CipherController::class, 'process']);
