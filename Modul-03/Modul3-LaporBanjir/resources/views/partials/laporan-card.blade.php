<article class="card">
    <div class="card-body">
        @if ($laporan['tinggi_genangan'] < 30)
            <span class="status waspada">Waspada</span>
        @elseif ($laporan['tinggi_genangan'] <= 70)
            <span class="status siaga">Siaga</span>
        @else
            <span class="status awas">Awas</span>
        @endif
        <h3>{{ $laporan['lokasi'] }}</h3>
        <p>Pelapor: <strong>{{ $laporan['nama_pelapor'] }}</strong></p>
        <p>Tinggi genangan: <strong>{{ $laporan['tinggi_genangan'] }} cm</strong></p>
    </div>
</article>
