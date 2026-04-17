<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        return view('mahasiswa.index');
    }

    public function create() {
        return view('mahasiswa.create');
    }

    public function store(Request $request) {
        $validasiData = $request->validate([
            'nim' => 'required|unique:mahasiswa,nim',
            'nama' => 'required|min:3',
            'jurusan' => 'required'
        ]);

        MahasiswaModel::create($validasiData);
        return redirect('/create')->with('success', 'Berhasil Menambahkan Data');
    }

    public function tampil() {
        $data = MahasiswaModel::all();
        return view('mahasiswa.tampil', compact('data'));
    }

    public function destroy($nim) {
        $mhs = MahasiswaModel::findOrFail($nim);
        $mhs->delete();
        return redirect('/tampil')->with('success', 'Berhasil Menghapus Data');
    }

    // Fungsi untuk mengambil data dan menampilkan ke form edit
public function edit($nim)
{
    // Mencari data berdasarkan NIM [cite: 2, 465]
    $mhs = MahasiswaModel::findOrFail($nim); 
    return view('mahasiswa.edit', compact('mhs'));
}

// Fungsi untuk menyimpan perubahan data ke database
public function update(Request $request, $nim)
{
    // Validasi data input [cite: 1, 93-95]
    $validasiData = $request->validate([
        'nama' => 'required|min:3', 
        'jurusan' => 'required' 
    ], [
        'nama.required' => 'Nama wajib diisi.', 
        'nama.min' => 'Nama minimal 3 karakter.', 
        'jurusan.required' => 'Jurusan wajib diisi.'
    ]);

    // Update data di database berdasarkan NIM [cite: 1, 71]
    $mhs = MahasiswaModel::findOrFail($nim);
    $mhs->update($validasiData);

    // Redirect kembali ke halaman tampil dengan pesan sukses
    return redirect('/tampil')->with('success', 'Berhasil Mengubah Data');
}
}