@extends('layouts.app')
@section('title', 'Laporan Data Mahasiswa')
@section('content')
<div class="table-container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-primary m-0"><i class="fas fa-table me-2"></i>Laporan Data Mahasiswa</h3>
        <a href="/create" class="btn btn-primary shadow-sm"><i class="fas fa-plus me-2"></i>Tambah Mahasiswa</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover align-middle border-0">
            <thead class="table-light">
                <tr class="text-uppercase text-secondary" style="font-size: 0.85rem;">
                    <th class="ps-3">NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jurusan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $mhs)
                <tr>
                    <td class="ps-3 fw-bold text-dark">{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td><span class="badge bg-info text-dark opacity-75">{{ $mhs->jurusan }}</span></td>
                    <td class="text-center">
                        <div class="btn-group shadow-sm">
                            <a href="/edit/{{ $mhs->nim }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDelete-{{ $mhs->nim }}">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                        @include('mahasiswa.confirmasidelete')
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-5 text-muted">Belum ada data mahasiswa.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection