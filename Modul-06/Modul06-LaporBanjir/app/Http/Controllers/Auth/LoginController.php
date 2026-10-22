<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(Request $request)
    {
        return view('auth.login', [
            'intended' => $request->session()->get('url.intended'),
        ]);
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password wajib diisi.',
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()
                ->intended(route('lapor-banjir.daftar'))
                ->with('success', 'Login berhasil. Selamat datang, '.Auth::user()->name.'.');
        }

        return back()
            ->withErrors(['email' => 'Email atau password yang Anda masukkan salah.'])
            ->onlyInput('email');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('lapor-banjir.form')
            ->with('success', 'Anda telah logout. Halaman pengelolaan laporan kembali terkunci.');
    }
}
