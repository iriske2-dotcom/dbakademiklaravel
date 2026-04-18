<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Letakkan semua rute mahasiswamu di sini agar aman
    Route::get('/', [MahasiswaController::class, 'index']);
    Route::get('/create', [MahasiswaController::class, 'create']);
    Route::post('/store', [MahasiswaController::class, 'store']);
    Route::get('/tampil', [MahasiswaController::class, 'tampil']);
    Route::get('/edit/{nim}', [MahasiswaController::class, 'edit']);
    Route::put('/update/{nim}', [MahasiswaController::class, 'update']);
    Route::delete('/delete/{nim}', [MahasiswaController::class, 'destroy']);
});

require __DIR__.'/auth.php';
