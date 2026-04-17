@extends('layouts.app')
@section('title', 'Entry Data Mahasiswa')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card p-4">
            <div class="card-body">
                <h3 class="card-title fw-bold mb-4 text-primary"><i class="fas fa-user-plus me-2"></i>Entry Data Mahasiswa</h3>
                <form action="/store" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">NIM</label>
                        <input type="number" name="nim" value="{{ old('nim') }}" class="form-control @error('nim') is-invalid @enderror" placeholder="Masukkan NIM">
                        @error('nim') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Lengkap</label>
                        <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Lengkap">
                        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Jurusan</label>
                        <select name="jurusan" class="form-select">
                            <option value="SI">Sistem Informasi</option>
                            <option value="PTIK">PTIK</option>
                            <option value="Akuntansi">Akuntansi</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 shadow-sm">
                        <i class="fas fa-save me-2"></i>Simpan Data
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection