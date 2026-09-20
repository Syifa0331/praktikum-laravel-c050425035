<!DOCTYPE html>
<html>
<head>
    <title>Data Akademik</title>
</head>

<body>

<h1>Data Mahasiswa</h1>

<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Prodi</th>
        <th>Semester</th>
    </tr>

    @foreach ($mahasiswa as $mhs)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $mhs->nim }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->email }}</td>
        <td>{{ $mhs->prodi }}</td>
        <td>{{ $mhs->semester }}</td>
    </tr>
    @endforeach
</table>


<h1>Data Mata Kuliah</h1>

<table border="1">
    <tr>
        <th>No</th>
        <th>Kode MK</th>
        <th>Nama Mata Kuliah</th>
        <th>SKS</th>
        <th>Semester</th>
        <th>Dosen ID</th>
    </tr>

    @foreach ($matakuliah as $mk)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $mk->kode_mk }}</td>
        <td>{{ $mk->nama_mk }}</td>
        <td>{{ $mk->sks }}</td>
        <td>{{ $mk->semester }}</td>
        <td>{{ $mk->dosen_id }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>