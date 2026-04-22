<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\BukuController;

// Route::prefix('auth')->group (function(){}
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/daftar_pengguna', [PenggunaController::class, 'index']);

//untuk CRUD
Route::get('/crud', [CRUDController::class, 'index'])->name('crud.index');
Route::post('/crud', [CRUDController::class, 'store'])->name('crud.store');
Route::get('/crud/{id}/edit', [CRUDController::class, 'edit'])->name('crud.edit');
Route::put('/crud/{id}', [CRUDController::class, 'update'])->name('crud.update');
Route::delete('/crud/{id}', [CRUDController::class, 'destroy'])->name('crud.destroy');

// Route Cipher Anda
Route::get('/', [\App\Http\Controllers\CipherController::class, 'index']);
Route::post('/process', [\App\Http\Controllers\CipherController::class, 'process']);

Route::get('/buku', [BukuController::class, 'index']);

// // Proteksi Dashboard
// Route::get('/dashboard', function () {
//     if (!session()->has('is_logged_in')) { //jika sesi user atau login tidak login maka dikembalikan ke login
//         return redirect('/dashboard'); //nama url
//     }
//     return view('daftar_pengguna'); //mengarahkan kemana urlnya
// })->name('login');
