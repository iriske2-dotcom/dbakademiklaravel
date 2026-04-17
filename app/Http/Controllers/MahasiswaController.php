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
}