<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasAkhirController extends Controller
{
    public function login()
    {
        return view('tugas-akhir.login');
    }

    public function register()
    {
        return view('tugas-akhir.register');
    }

    public function home()
    {
        return view('tugas-akhir.home');
    }

    public function warisan()
    {
        return view('tugas-akhir.warisan');
    }

    public function peta()
    {
        return view('tugas-akhir.peta');
    }

    public function kuliner()
    {
        return view('tugas-akhir.kuliner');
    }

    public function kafe()
    {
        return view('tugas-akhir.kafe');
    }

    public function event()
    {
        return view('tugas-akhir.event');
    }

    public function eduction()
    {
        return view('tugas-akhir.eduction');
    }

    public function profil()
    {
        return view('tugas-akhir.profil');
    }

    public function pengaturan()
    {
        return view('tugas-akhir.pengaturan');
    }

    public function keluar()
    {
        return view('tugas-akhir.keluar');
    }

    public function reviewForm()
    {
        return view('tugas-akhir.review-form');
    }

    public function reviewProses(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'tempat' => ['required', 'string', 'max:120'],
            'rating' => ['required', 'integer', 'min:1', 'max:5'],
            'komentar' => ['required', 'string', 'max:500'],
        ]);

        return view('tugas-akhir.review-hasil', $validated);
    }
}
