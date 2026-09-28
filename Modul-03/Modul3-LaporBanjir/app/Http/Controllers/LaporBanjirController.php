<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function form()
    {
        return view('lapor-banjir.form');
    }

    public function kirim(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor' => ['required', 'string', 'max:100'],
            'lokasi' => ['required', 'string', 'max:150'],
            'tinggi_genangan' => ['required', 'numeric', 'min:1'],
        ], [
            'nama_pelapor.required' => 'Nama pelapor wajib diisi.',
            'lokasi.required' => 'Lokasi kejadian wajib diisi.',
            'tinggi_genangan.required' => 'Tinggi genangan wajib diisi.',
            'tinggi_genangan.numeric' => 'Tinggi genangan harus berupa angka.',
            'tinggi_genangan.min' => 'Tinggi genangan minimal 1 cm.',
        ]);

        return view('lapor-banjir.konfirmasi', $validated);
    }

    public function daftar()
    {
        $laporan = [
            ['nama_pelapor' => 'Dina Rahma', 'lokasi' => 'Baleendah, Desa Andir', 'tinggi_genangan' => 25],
            ['nama_pelapor' => 'Rizky Pratama', 'lokasi' => 'Dayeuhkolot, Citeureup', 'tinggi_genangan' => 55],
            ['nama_pelapor' => 'Siti Nurjanah', 'lokasi' => 'Bojongsoang, Tegalluar', 'tinggi_genangan' => 82],
            ['nama_pelapor' => 'Agus Hermawan', 'lokasi' => 'Majalaya, Padamulya', 'tinggi_genangan' => 30],
        ];

        return view('lapor-banjir.daftar', compact('laporan'));
    }
}
