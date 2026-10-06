@extends('layouts.app')

@section('title', 'LaporBanjir - Daftar Laporan')
@section('app_name', 'LaporBanjir')
@section('tagline', 'Daftar laporan banjir dari database')

@section('content')
    <section class="page-title">
        <h2>Daftar Laporan Banjir</h2>
        <p>Data berikut diambil langsung dari tabel laporan pada database dan dapat dipantau BPBD Kabupaten Bandung.</p>
    </section>

    <section class="grid">
        @forelse ($laporan as $item)
            @include('partials.laporan-card', ['laporan' => $item])
        @empty
            <div class="panel">Belum ada laporan banjir.</div>
        @endforelse
    </section>
@endsection
