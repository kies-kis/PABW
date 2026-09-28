<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Sederhana - WeBandoo+</title>
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
            width: min(880px, calc(100% - 32px));
            margin: 0 auto;
            padding: 40px 0;
        }
        .panel {
            padding: 28px;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 16px 36px rgba(31, 41, 55, 0.12);
        }
        h1 {
            margin: 0 0 8px;
            color: #315c2b;
        }
        p {
            margin: 0 0 24px;
            color: #667085;
            line-height: 1.7;
        }
        .field {
            margin-bottom: 18px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 700;
        }
        input, select, textarea {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #cad6c5;
            border-radius: 6px;
            font: inherit;
        }
        textarea {
            resize: vertical;
        }
        .error {
            margin-top: 6px;
            color: #b42318;
            font-size: 14px;
        }
        .actions {
            display: flex;
            gap: 12px;
            align-items: center;
            margin-top: 22px;
        }
        button, a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 18px;
            border: 0;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 700;
            cursor: pointer;
        }
        button {
            color: #fff;
            background: #4a8645;
        }
        a {
            color: #315c2b;
            background: #e8f2e3;
        }
    </style>
</head>
<body>
    <main class="page">
        <section class="panel">
            <h1>Review Tempat Wisata</h1>
            <p>Form ini mewakili proses input, proses, dan tampilkan hasil pada rancangan tugas akhir WeBandoo+ tanpa database.</p>

            <form action="{{ route('review.proses') }}" method="post">
                @csrf

                <div class="field">
                    <label for="nama">Nama Pengunjung</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Contoh: Eyckies Bintang">
                    @error('nama') <div class="error">{{ $message }}</div> @enderror
                </div>

                <div class="field">
                    <label for="tempat">Tempat yang Direview</label>
                    <input type="text" id="tempat" name="tempat" value="{{ old('tempat') }}" placeholder="Contoh: Gedung Sate">
                    @error('tempat') <div class="error">{{ $message }}</div> @enderror
                </div>

                <div class="field">
                    <label for="rating">Rating</label>
                    <select id="rating" name="rating">
                        <option value="">Pilih rating</option>
                        @for ($i = 5; $i >= 1; $i--)
                            <option value="{{ $i }}" @selected(old('rating') == $i)>{{ $i }} dari 5</option>
                        @endfor
                    </select>
                    @error('rating') <div class="error">{{ $message }}</div> @enderror
                </div>

                <div class="field">
                    <label for="komentar">Komentar</label>
                    <textarea id="komentar" name="komentar" rows="5" placeholder="Tulis pengalaman singkat kamu">{{ old('komentar') }}</textarea>
                    @error('komentar') <div class="error">{{ $message }}</div> @enderror
                </div>

                <div class="actions">
                    <button type="submit">Kirim Review</button>
                    <a href="{{ route('home') }}">Kembali ke Home</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
