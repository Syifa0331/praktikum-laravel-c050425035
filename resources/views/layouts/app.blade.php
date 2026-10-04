<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('judul', 'Aplikasi Akademik')</title>
</head>
<body>
    <header>
        <h2>Sistem Informasi Akademik</h2>
        <nav>
            <a href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
            <a href="{{ route('matakuliah.index') }}">Mata Kuliah</a>
        </nav>
        <hr>
    </header>

    <main>
        @yield('konten')
    </main>

    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} Praktikum Pemprograman Web</p>
    </footer>
</body>
</html>