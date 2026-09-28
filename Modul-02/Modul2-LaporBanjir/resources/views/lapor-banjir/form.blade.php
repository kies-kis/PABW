<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaporBanjir - Form Pelaporan</title>
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
            width: min(960px, calc(100% - 32px));
            margin: 0 auto;
            padding: 40px 0;
        }

        .header {
            margin-bottom: 24px;
            padding: 24px;
            border-left: 6px solid #0f766e;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 10px 24px rgba(15, 118, 110, 0.12);
        }

        .header h1 {
            margin: 0 0 8px;
            font-size: 32px;
            color: #0f766e;
        }

        .header p {
            margin: 0;
            line-height: 1.6;
            color: #475569;
        }

        .form-card {
            padding: 24px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 10px 24px rgba(15, 23, 42, 0.1);
        }

        .field {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 16px;
        }

        input:focus {
            outline: 3px solid rgba(20, 184, 166, 0.25);
            border-color: #0f766e;
        }

        .error {
            margin-top: 6px;
            color: #b91c1c;
            font-size: 14px;
        }

        .actions {
            display: flex;
            gap: 12px;
            align-items: center;
            margin-top: 22px;
        }

        button {
            padding: 12px 18px;
            border: 0;
            border-radius: 6px;
            color: #ffffff;
            background: #0f766e;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #115e59;
        }

        .hint {
            color: #64748b;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <main class="page">
        <section class="header">
            <h1>LaporBanjir</h1>
            <p>Sistem pelaporan banjir sederhana BPBD Kabupaten Bandung tanpa database.</p>
        </section>

        <section class="form-card">
            <form action="{{ route('lapor-banjir.kirim') }}" method="post">
                @csrf

                <div class="field">
                    <label for="nama_pelapor">Nama Pelapor</label>
                    <input
                        type="text"
                        id="nama_pelapor"
                        name="nama_pelapor"
                        value="{{ old('nama_pelapor') }}"
                        placeholder="Contoh: Eyckies Bintang"
                    >
                    @error('nama_pelapor')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="lokasi">Lokasi Kejadian</label>
                    <input
                        type="text"
                        id="lokasi"
                        name="lokasi"
                        value="{{ old('lokasi') }}"
                        placeholder="Contoh: Kecamatan Baleendah, Desa Andir"
                    >
                    @error('lokasi')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="field">
                    <label for="tinggi_genangan">Tinggi Genangan Air (cm)</label>
                    <input
                        type="number"
                        id="tinggi_genangan"
                        name="tinggi_genangan"
                        value="{{ old('tinggi_genangan') }}"
                        placeholder="Contoh: 45"
                        min="1"
                    >
                    @error('tinggi_genangan')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="actions">
                    <button type="submit">Kirim Laporan</button>
                    <span class="hint">Data hanya diproses sementara.</span>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
