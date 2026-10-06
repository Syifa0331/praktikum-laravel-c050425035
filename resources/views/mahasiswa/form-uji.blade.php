<h1>Cari Mahasiswa</h1>

<form action="{{ route('mahasiswa.cari') }}" method="GET">
    <input type="text" name="nama" placeholder="Masukkan nama Mahasiswa">
    <button type="submit">Cari</button>
</form>