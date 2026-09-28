@extends('layouts.app')

@section('title', 'LaporBanjir - Konfirmasi')
@section('app_name', 'LaporBanjir')
@section('tagline', 'Konfirmasi laporan banjir yang berhasil dikirim')

@section('content')
    <x-alert>
        Laporan berhasil dikirim. Data berikut sudah diterima oleh sistem prototipe LaporBanjir.
    </x-alert>

    <section class="panel">
        <div class="page-title">
            <h2>Konfirmasi Laporan</h2>
            <p>Pada prototipe ini, data tidak disimpan ke database.</p>
        </div>

        <div class="summary">
            <div class="row">
                <div class="label">Nama Pelapor</div>
                <div class="value">{{ $nama_pelapor }}</div>
            </div>
            <div class="row">
                <div class="label">Lokasi Kejadian</div>
                <div class="value">{{ $lokasi }}</div>
            </div>
            <div class="row">
                <div class="label">Tinggi Genangan</div>
                <div class="value">{{ $tinggi_genangan }} cm</div>
            </div>
        </div>

        <div class="actions">
            <a class="btn" href="{{ route('lapor-banjir.form') }}">Buat Laporan Baru</a>
            <a class="btn secondary" href="{{ route('lapor-banjir.daftar') }}">Lihat Daftar Laporan</a>
        </div>
    </section>
@endsection
