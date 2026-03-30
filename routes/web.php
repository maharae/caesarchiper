<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CipherController;

//ini route milik caesar cipher
Route::get('/', [CipherController::class, 'index']);
Route::post('/process', [CipherController::class, 'process']);

//ini route milik login dan dashboard
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

// ini route landing
Route::get('/landing', function () {
    return view('landing');
});
