@extends('layouts.app')

@section('title', 'LaporBanjir - Form Pelaporan')
@section('app_name', 'LaporBanjir')
@section('tagline', 'Sistem pelaporan banjir BPBD Kabupaten Bandung')

@section('content')
    <section class="page-title">
        <h2>Form Pelaporan Banjir</h2>
        <p>Isi data kejadian banjir. Form dikirim menggunakan method POST dan diproses tanpa database.</p>
    </section>

    <section class="form-card">
        <form action="{{ route('lapor-banjir.kirim') }}" method="post">
            @csrf

            <div class="field">
                <label for="nama_pelapor">Nama Pelapor</label>
                <input type="text" id="nama_pelapor" name="nama_pelapor" value="{{ old('nama_pelapor') }}" placeholder="Contoh: Eyckies Bintang">
                @error('nama_pelapor')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="field">
                <label for="lokasi">Lokasi Kejadian</label>
                <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" placeholder="Contoh: Kecamatan Baleendah, Desa Andir">
                @error('lokasi')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="field">
                <label for="tinggi_genangan">Tinggi Genangan Air (cm)</label>
                <input type="number" id="tinggi_genangan" name="tinggi_genangan" value="{{ old('tinggi_genangan') }}" placeholder="Contoh: 45" min="1">
                @error('tinggi_genangan')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="actions">
                <button type="submit">Kirim Laporan</button>
                <a class="btn secondary" href="{{ route('lapor-banjir.daftar') }}">Lihat Daftar</a>
            </div>
        </form>
    </section>
@endsection
