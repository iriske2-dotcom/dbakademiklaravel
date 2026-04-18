@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="container text-center py-5">
    <div class="card shadow border-0 p-5" style="border-radius: 20px;">
        <h1 class="display-4 fw-bold text-primary">Selamat Datang!</h1>
        <p class="lead text-muted">Halo, <strong>{{ Auth::user()->name }}</strong>. Kamu telah masuk ke Sistem Akademik RIS.</p>
        <hr class="my-4" style="width: 100px; margin: auto; border-top: 3px solid #007bff;">
        <div class="mt-4">
            <a href="/tampil" class="btn btn-primary btn-lg shadow-sm px-5 fw-bold">
                <i class="fas fa-list-ul me-2"></i>Lihat Data Mahasiswa
            </a>
        </div>
    </div>
</div>
@endsection