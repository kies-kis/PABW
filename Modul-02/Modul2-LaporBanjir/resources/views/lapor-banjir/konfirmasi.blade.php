<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir - Konfirmasi</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            color: #17202a;
            background: #edf7f6;
        }

        .page {
            width: min(880px, calc(100% - 32px));
            margin: 0 auto;
            padding: 40px 0;
        }

        .card {
            padding: 28px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 10px 24px rgba(15, 23, 42, 0.1);
        }

        .badge {
            display: inline-block;
            margin-bottom: 14px;
            padding: 6px 10px;
            border-radius: 6px;
            color: #0f766e;
            background: #ccfbf1;
            font-weight: bold;
            font-size: 14px;
        }

        h1 {
            margin: 0 0 10px;
            color: #0f766e;
        }

        p {
            line-height: 1.6;
            color: #475569;
        }

        .summary {
            margin: 24px 0;
            border: 1px solid #dbe6e4;
            border-radius: 8px;
            overflow: hidden;
        }

        .row {
            display: grid;
            grid-template-columns: 220px 1fr;
            border-bottom: 1px solid #dbe6e4;
        }

        .row:last-child {
            border-bottom: 0;
        }

        .label {
            padding: 14px;
            background: #f8fafc;
            font-weight: bold;
        }

        .value {
            padding: 14px;
        }

        .actions {
            display: flex;
            gap: 12px;
            align-items: center;
        }

        a {
            display: inline-block;
            padding: 12px 18px;
            border-radius: 6px;
            text-decoration: none;
            color: #ffffff;
            background: #0f766e;
            font-weight: bold;
        }

        a:hover {
            background: #115e59;
        }

        @media (max-width: 640px) {
            .row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <main class="page">
        <section class="card">
            <span class="badge">Laporan Diterima</span>
            <h1>Konfirmasi Laporan Banjir</h1>
            <p>Berikut adalah data laporan yang telah dikirim. Pada prototipe ini, data tidak disimpan ke database.</p>

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
                <a href="{{ route('lapor-banjir.form') }}">Buat Laporan Baru</a>
            </div>
        </section>
    </main>
</body>
</html>
