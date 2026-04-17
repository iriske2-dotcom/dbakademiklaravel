@extends('layouts.app')
@section('title', 'Edit Data Mahasiswa')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-4 shadow-sm border-0" style="border-radius: 15px;">
            <div class="card-body">
                <h3 class="card-title fw-bold mb-4 text-primary">
                    <i class="fas fa-edit me-2"></i>Edit Data Mahasiswa
                </h3>
                
                <form action="/update/{{ $mhs->nim }}" method="POST">
                    @csrf
                    @method('PUT') {{-- Tag wajib Laravel untuk proses Update --}}
                    
                    <div class="mb-3">
                        <label class="form-label fw-semibold">NIM</label>
                        <input type="text" class="form-control bg-light" value="{{ $mhs->nim }}" readonly>
                        <small class="text-danger">* NIM tidak dapat diubah.</small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama Mahasiswa</label>
                        <input type="text" name="nama" value="{{ old('nama', $mhs->nama) }}" 
                               class="form-control @error('nama') is-invalid @enderror">
                        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Jurusan</label>
                        <select name="jurusan" class="form-select @error('jurusan') is-invalid @enderror">
                            <option value="SI" {{ $mhs->jurusan == 'SI' ? 'selected' : '' }}>Sistem Informasi</option>
                            <option value="PTIK" {{ $mhs->jurusan == 'PTIK' ? 'selected' : '' }}>PTIK</option>
                            <option value="Akuntansi" {{ $mhs->jurusan == 'Akuntansi' ? 'selected' : '' }}>Akuntansi</option>
                        </select>
                        @error('jurusan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary w-100 fw-bold">
                            <i class="fas fa-save me-2"></i>Simpan Perubahan
                        </button>
                        <a href="/tampil" class="btn btn-outline-secondary w-100 fw-bold">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection