@extends('layouts.app')

@section('title', 'LaporBanjir - Konfirmasi')
@section('app_name', 'LaporBanjir')
@section('tagline', 'Konfirmasi laporan banjir yang berhasil dikirim')

@section('content')
    <x-alert>
        Laporan berhasil dikirim dan tersimpan ke database LaporBanjir.
    </x-alert>

    <section class="panel">
        <div class="page-title">
            <h2>Konfirmasi Laporan</h2>
            <p>Data berikut sudah tersimpan ke tabel laporan pada database db_laporbanjir.</p>
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
            <div class="row">
                <div class="label">Tanggal Kejadian</div>
                <div class="value">{{ \Illuminate\Support\Carbon::parse($tanggal_kejadian)->translatedFormat('d F Y') }}</div>
            </div>
        </div>

        <div class="actions">
            <a class="btn" href="{{ route('lapor-banjir.form') }}">Buat Laporan Baru</a>
            <a class="btn secondary" href="{{ route('lapor-banjir.daftar') }}">Lihat Daftar Laporan</a>
        </div>
    </section>
@endsection
