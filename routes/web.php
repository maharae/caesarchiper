<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CipherController;

//ini route milik caesar cipher
Route::get('/', [CipherController::class, 'index']);
Route::post('/process', [CipherController::class, 'process']);

// --- Route Auth ---

// 1. Menampilkan halaman login
Route::get('/login', function () {
    return view('login');
})->name('login');

// 2. Proses Authentication (Arahkan ke Method di Controller)
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');

// 3. Halaman Dashboard (Terproteksi)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard'); // Tambahkan name 'dashboard' di sini

// 4. Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// --- Route Lainnya ---
Route::get('/', [CipherController::class, 'index']);
Route::post('/process', [CipherController::class, 'process']);

Route::get('/landing', function () {
    return view('landing');
})->name('landing');
