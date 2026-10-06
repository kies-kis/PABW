<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
class MahasiswaController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function simpan(Request $request)
    {
        Mahasiswa::create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'jurusan' => $request->input('jurusan')
        ]);

        return 'Data mahasiswa berhasil disimpan.';
    }

    public function daftar()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
}
