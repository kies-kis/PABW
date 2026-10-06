<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
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
            'tanggal_kejadian' => ['required', 'date'],
        ], [
            'nama_pelapor.required' => 'Nama pelapor wajib diisi.',
            'lokasi.required' => 'Lokasi kejadian wajib diisi.',
            'tinggi_genangan.required' => 'Tinggi genangan wajib diisi.',
            'tinggi_genangan.numeric' => 'Tinggi genangan harus berupa angka.',
            'tinggi_genangan.min' => 'Tinggi genangan minimal 1 cm.',
            'tanggal_kejadian.required' => 'Tanggal kejadian wajib diisi.',
            'tanggal_kejadian.date' => 'Tanggal kejadian tidak valid.',
        ]);

        Laporan::create($validated);

        return view('lapor-banjir.konfirmasi', $validated);
    }

    public function daftar()
    {
        $laporan = Laporan::all();

        return view('lapor-banjir.daftar', compact('laporan'));
    }
}
