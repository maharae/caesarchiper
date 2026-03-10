<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CipherController;

Route::get('/', [CipherController::class, 'index']);
Route::post('/process', [CipherController::class, 'process']);
