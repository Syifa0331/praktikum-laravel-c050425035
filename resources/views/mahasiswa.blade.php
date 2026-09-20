<h1>Daftar Mahasiswa</h1>
<table border="1" cellpadding="20">
 <tr><th>NIM</th><th>Nama</th><th>Prodi</th><th>Semester</th></tr>
 @foreach ($data as $mhs)
 <tr>
     <td>{{ $mhs->nim }}</td>
     <td>{{ $mhs->nama }}</td>
     <td>{{ $mhs->prodi }}</td>
     <td>{{ $mhs->semester }}</td>
 </tr>
 @endforeach
</table>

<h1>Daftar Matakuliah</h1>
<table border="1" cellpadding="8">
 <tr><th>Kode Matakuliah</th><th>Nama Matakuliah</th><th>Sks</th><th>Semester</th>Dosen ID<th></tr>
 @foreach ($data as $mks)
 <tr>
     <td>{{ $mks->kode_mk }}</td>
     <td>{{ $mks->nama_mk }}</td>
     <td>{{ $mks->sks }}</td>
     <td>{{ $mks->semester }}</td>
     <td>{{ $mks->dosen_id }}</td>
 </tr>
 @endforeach
</table>