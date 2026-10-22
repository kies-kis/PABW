@extends('layouts.app')

@section('title', 'LaporBanjir - Profil Petugas')
@section('tagline', 'Data akun petugas yang sedang login')

@section('content')
    <section class="page-title auth-wrap">
        <h2>Profil Petugas</h2>
        <p>Data di bawah diambil dari akun yang sedang login menggunakan <code>Auth::user()</code>.</p>
    </section>

    <section class="form-card auth-wrap">
        <h2>Informasi Akun</h2>
        <p class="form-note">Pastikan data akun sudah benar. Hubungi admin BPBD jika ada data yang perlu diperbaiki.</p>

        <div class="summary">
            <div class="row">
                <div class="label">Nama</div>
                <div class="value">{{ $petugas->name }}</div>
            </div>
            <div class="row">
                <div class="label">Email</div>
                <div class="value">{{ $petugas->email }}</div>
            </div>
            <div class="row">
                <div class="label">Akun dibuat</div>
                <div class="value">
                    {{ $petugas->created_at->translatedFormat('d F Y, H:i') }}
                    <span class="chips"><span>{{ $petugas->created_at->diffForHumans() }}</span></span>
                </div>
            </div>
        </div>

        <div class="actions">
            <a class="btn" href="{{ route('lapor-banjir.daftar') }}">Kembali ke Daftar Laporan</a>
            <a class="btn secondary" href="{{ route('lapor-banjir.form') }}">Buka Form Pelaporan</a>
        </div>
    </section>
@endsection
