<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

// Pastikan tidak ada spasi di nama class "MahasiswaController"
Route::get('/', [MahasiswaController::class, 'index']); 
Route::get('/create', [MahasiswaController::class, 'create']);
Route::post('/store', [MahasiswaController::class, 'store']);
Route::get('/tampil', [MahasiswaController::class, 'tampil']);
Route::delete('/delete/{nim}', [MahasiswaController::class, 'destroy']);
// Route untuk menampilkan form edit
Route::get('/edit/{nim}', [MahasiswaController::class, 'edit']);

// Route untuk memproses perubahan data (menggunakan method PUT)
Route::put('/update/{nim}', [MahasiswaController::class, 'update']);