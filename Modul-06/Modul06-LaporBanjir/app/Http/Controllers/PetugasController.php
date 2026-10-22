<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class PetugasController extends Controller
{
    public function profil()
    {
        return view('petugas.profil', [
            'petugas' => Auth::user(),
        ]);
    }
}
