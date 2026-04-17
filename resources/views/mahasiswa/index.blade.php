@extends('layouts.app')
@section('title', 'Selamat Datang')
@section('content')
<div class="row justify-content-center text-center py-5">
    <div class="col-md-8">
        <div class="mb-4">
            <i class="fas fa-graduation-cap fa-5x text-primary"></i>
        </div>
        <h1 class="display-4 fw-bold text-dark">Selamat Datang di Akademik RIS</h1>
        <p class="lead text-muted mb-4">Sistem pengelolaan data mahasiswa akademik.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="/create" class="btn btn-primary btn-lg shadow-sm">Mulai Entry Data</a>
            <a href="/tampil" class="btn btn-outline-primary btn-lg shadow-sm">Lihat Laporan</a>
        </div>
    </div>
</div>
@endsection