<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController; // <-- Pastikan baris ini ada!
use Illuminate\Support\Facades\Route;

// 1. Halaman Awal (Bisa kamu ganti ke '/' atau biarkan 'welcome')
Route::get('/', function () {
    return redirect('/dashboard');
});

// 2. Rute Dashboard bawaan Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 3. --- BAGIAN PROTEKSI DATA MAHASISWA (HANYA BISA DIAKSES JIKA LOGIN) ---
Route::middleware('auth')->group(function () {
    // Rute utama aplikasi SI Akademik kamu
    Route::get('/tampil', [MahasiswaController::class, 'tampil']);
    Route::get('/create', [MahasiswaController::class, 'create']);
    Route::post('/store', [MahasiswaController::class, 'store']);
    Route::get('/edit/{nim}', [MahasiswaController::class, 'edit']);
    Route::put('/update/{nim}', [MahasiswaController::class, 'update']);
    Route::delete('/delete/{nim}', [MahasiswaController::class, 'destroy']);

    // Rute Profil bawaan Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';