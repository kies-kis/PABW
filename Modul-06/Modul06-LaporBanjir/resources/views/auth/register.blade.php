@extends('layouts.app')

@section('title', 'LaporBanjir - Register Petugas')
@section('tagline', 'Buat akun petugas untuk mengelola laporan banjir')

@section('content')
    <section class="page-title auth-wrap">
        <h2>Register Petugas</h2>
        <p>Akun ini digunakan petugas BPBD untuk membuka halaman pengelolaan laporan. Warga tidak perlu mendaftar untuk mengirim laporan.</p>
    </section>

    <section class="form-card auth-wrap">
        <h2>Buat Akun Baru</h2>
        <p class="form-note">Isi data berikut dengan benar. Password minimal 8 karakter dan harus sama dengan konfirmasinya.</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="field">
                <label for="name">Nama Petugas</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="field">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password">
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="field">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="actions">
                <button type="submit">Register</button>
                <a class="btn secondary" href="{{ route('login') }}">Sudah punya akun</a>
            </div>
        </form>

        <p class="form-footer">Sudah punya akun petugas? <a href="{{ route('login') }}">Login di sini</a>.</p>
    </section>
@endsection
