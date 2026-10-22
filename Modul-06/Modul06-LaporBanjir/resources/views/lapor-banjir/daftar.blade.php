@extends('layouts.app')

@section('title', 'LaporBanjir - Daftar Laporan')
@section('tagline', 'Daftar laporan banjir dari database')

@section('content')
    <section class="page-title">
        <h2>Daftar Laporan Banjir</h2>
        <p>Data berikut diambil langsung dari tabel laporan pada database dan hanya dapat dipantau oleh petugas yang sudah login.</p>
    </section>

    <section class="panel toolbar">
        <div>
            <strong>Area petugas BPBD</strong>
            <p>Masuk sebagai {{ Auth::user()->name }} ({{ Auth::user()->email }}).</p>
        </div>
        <div class="chips">
            <span>{{ $laporan->count() }} laporan</span>
        </div>
    </section>

    <section class="grid">
        @forelse ($laporan as $item)
            @include('partials.laporan-card', ['laporan' => $item])
        @empty
            <div class="panel">Belum ada laporan banjir.</div>
        @endforelse
    </section>
@endsection
