<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Review - WeBandoo+</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            font-family: Poppins, Arial, sans-serif;
            color: #1f2937;
            background: #f4f7f1;
        }
        .page {
            width: min(820px, calc(100% - 32px));
            margin: 0 auto;
            padding: 40px 0;
        }
        .panel {
            padding: 28px;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 16px 36px rgba(31, 41, 55, 0.12);
        }
        .badge {
            display: inline-block;
            margin-bottom: 14px;
            padding: 6px 10px;
            border-radius: 6px;
            color: #315c2b;
            background: #e8f2e3;
            font-weight: 700;
        }
        h1 {
            margin: 0 0 8px;
            color: #315c2b;
        }
        p {
            line-height: 1.7;
        }
        .summary {
            margin: 24px 0;
            border: 1px solid #d8e5d3;
            border-radius: 8px;
            overflow: hidden;
        }
        .row {
            display: grid;
            grid-template-columns: 220px 1fr;
            border-bottom: 1px solid #d8e5d3;
        }
        .row:last-child {
            border-bottom: 0;
        }
        .label {
            padding: 14px;
            background: #f8fbf6;
            font-weight: 700;
        }
        .value {
            padding: 14px;
        }
        a {
            display: inline-flex;
            padding: 12px 18px;
            border-radius: 6px;
            color: #fff;
            background: #4a8645;
            text-decoration: none;
            font-weight: 700;
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
        <section class="panel">
            <span class="badge">Review Berhasil Diproses</span>
            <h1>Hasil Review Sementara</h1>
            <p>Data berikut hanya ditampilkan kembali oleh controller dan tidak disimpan ke database.</p>

            <div class="summary">
                <div class="row">
                    <div class="label">Nama Pengunjung</div>
                    <div class="value">{{ $nama }}</div>
                </div>
                <div class="row">
                    <div class="label">Tempat</div>
                    <div class="value">{{ $tempat }}</div>
                </div>
                <div class="row">
                    <div class="label">Rating</div>
                    <div class="value">{{ $rating }} dari 5</div>
                </div>
                <div class="row">
                    <div class="label">Komentar</div>
                    <div class="value">{{ $komentar }}</div>
                </div>
            </div>

            <a href="{{ route('review.form') }}">Isi Review Lagi</a>
        </section>
    </main>
</body>
</html>
