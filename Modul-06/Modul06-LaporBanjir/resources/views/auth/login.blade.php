@extends('layouts.app')

@section('title', 'LaporBanjir - Login Petugas')
@section('tagline', 'Masuk untuk membuka halaman pengelolaan laporan')

@section('content')
    <section class="page-title auth-wrap">
        <h2>Login Petugas</h2>
        <p>Halaman daftar laporan hanya dapat diakses oleh petugas BPBD yang sudah memiliki akun.</p>
    </section>

    <section class="form-card auth-wrap">
        <h2>Masuk ke Akun</h2>
        <p class="form-note">Gunakan email dan password yang terdaftar. Jika belum punya akun, silakan register terlebih dahulu.</p>

        @if ($intended)
            <div class="alert danger" role="alert">
                Halaman yang Anda tuju hanya dapat diakses setelah login sebagai petugas.
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="field">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="field checkbox">
                <input id="remember" type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Ingat saya</label>
            </div>

            <div class="actions">
                <button type="submit">Login</button>
                <a class="btn secondary" href="{{ route('lapor-banjir.form') }}">Kembali ke Form</a>
            </div>
        </form>

        <p class="form-footer">Belum punya akun petugas? <a href="{{ route('register') }}">Daftar di sini</a>.</p>
    </section>
@endsection
