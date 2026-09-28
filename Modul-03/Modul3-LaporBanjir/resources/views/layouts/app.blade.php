<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Praktikum Modul 3')</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; min-height: 100vh; font-family: Arial, sans-serif; color: #17202a; background: #eef7f6; }
        header { background: #0f766e; color: #ffffff; }
        .topbar, main, .footer-inner { width: min(1120px, calc(100% - 32px)); margin: 0 auto; }
        .topbar { padding: 22px 0 16px; }
        .brand { display: flex; justify-content: space-between; gap: 16px; align-items: center; flex-wrap: wrap; }
        .brand h1 { margin: 0; font-size: 28px; }
        .brand p { margin: 6px 0 0; color: #ccfbf1; }
        nav { display: flex; gap: 8px; flex-wrap: wrap; margin-top: 18px; }
        nav a { padding: 9px 12px; border-radius: 6px; color: #ffffff; text-decoration: none; background: rgba(255, 255, 255, 0.13); font-weight: 700; font-size: 14px; }
        nav a:hover, nav a.active { background: #ffffff; color: #0f766e; }
        main { padding: 30px 0 44px; }
        footer { padding: 20px 0; background: #123633; color: #dff7f3; }
        .card, .panel, .form-card { background: #ffffff; border: 1px solid #d9e8e6; border-radius: 8px; box-shadow: 0 10px 24px rgba(15, 23, 42, 0.08); }
        .panel, .form-card { padding: 24px; }
        .page-title { margin-bottom: 20px; }
        .page-title h2 { margin: 0 0 8px; color: #0f766e; font-size: 30px; }
        .page-title p { margin: 0; color: #52656b; line-height: 1.6; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 18px; }
        .card { overflow: hidden; }
        .card img { width: 100%; height: 170px; object-fit: cover; display: block; }
        .card-body { padding: 18px; }
        .tag, .status { display: inline-block; margin-bottom: 10px; padding: 6px 10px; border-radius: 6px; background: #ccfbf1; color: #0f766e; font-size: 13px; font-weight: 700; }
        .status.siaga { background: #fef3c7; color: #92400e; }
        .status.awas { background: #fee2e2; color: #991b1b; }
        label { display: block; margin-bottom: 8px; font-weight: 700; }
        input { width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 16px; }
        input:focus { outline: 3px solid rgba(20, 184, 166, 0.25); border-color: #0f766e; }
        .field { margin-bottom: 18px; }
        .error { margin-top: 6px; color: #b91c1c; font-size: 14px; }
        .btn, button { display: inline-block; padding: 12px 18px; border: 0; border-radius: 6px; color: #ffffff; background: #0f766e; font-weight: 700; text-decoration: none; cursor: pointer; }
        .btn.secondary { background: #334155; }
        .actions { display: flex; flex-wrap: wrap; gap: 12px; align-items: center; margin-top: 22px; }
        .summary { margin: 20px 0; border: 1px solid #dbe6e4; border-radius: 8px; overflow: hidden; }
        .row { display: grid; grid-template-columns: 220px 1fr; border-bottom: 1px solid #dbe6e4; }
        .row:last-child { border-bottom: 0; }
        .label { padding: 14px; background: #f8fafc; font-weight: 700; }
        .value { padding: 14px; }
        .hero { padding: 30px; margin-bottom: 20px; background: #ffffff; border-left: 6px solid #0f766e; border-radius: 8px; }
        .hero h2 { margin: 0 0 10px; color: #0f766e; font-size: 34px; }
        .hero p { margin: 0; color: #52656b; line-height: 1.7; }
        .chips { display: flex; gap: 8px; flex-wrap: wrap; margin-top: 12px; }
        .chips span { padding: 7px 10px; border-radius: 6px; background: #f1f5f9; color: #334155; font-size: 13px; font-weight: 700; }
        .alert { padding: 14px 16px; margin-bottom: 18px; border-radius: 8px; background: #dcfce7; color: #166534; border: 1px solid #86efac; font-weight: 700; }
        @media (max-width: 640px) { .row { grid-template-columns: 1fr; } .brand h1, .hero h2 { font-size: 26px; } }
    </style>
</head>
<body>
    <header>
        <div class="topbar">
            <div class="brand">
                <div>
                    <h1>@yield('app_name', 'Praktikum Modul 3')</h1>
                    <p>@yield('tagline', 'Aplikasi web praktikum')</p>
                </div>
            </div>
            <nav aria-label="Navigasi utama">
                <a href="{{ route('lapor-banjir.form') }}" @class(['active' => request()->routeIs('lapor-banjir.form')])>Form Banjir</a>
                <a href="{{ route('lapor-banjir.daftar') }}" @class(['active' => request()->routeIs('lapor-banjir.daftar')])>Daftar Laporan</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-inner">
            <strong>@yield('app_name', 'Praktikum Modul 3')</strong>
            <span> - Praktikum Pemrograman Web</span>
        </div>
    </footer>
</body>
</html>
