<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Praktikum Laravel</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        header, footer { background-color: #f8f8f8; padding: 10px; text-align: center; }
        nav a { margin: 0 10px; text-decoration: none; color: #333; }
        .card { border: 1px solid #ccc; padding: 15px; margin-bottom: 10px; border-radius: 5px; }
        .course { background-color: #e0f7fa; padding: 10px; margin-bottom: 10px; border-radius: 5px; }
        </style>
</head>
<body>
    <header>
        <h1>Praktikum Laravel</h1>
        <nav>
            <a href="{{ route('students.index') }}">Students</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Praktikum Laravel - Eyckies Bintang</p>
    </footer>
</body>
</html>