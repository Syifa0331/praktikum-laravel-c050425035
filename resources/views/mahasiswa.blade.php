<h1>Daftar Mahasiswa</h1>
<table border="1" cellpadding="20">
 <tr><th>NIM</th><th>Nama</th><th>Prodi</th><th>Semester</th></tr>
 <tr>
     <td>{{ $mahasiswa->nim }}</td>
     <td>{{ $mahasiswa->nama }}</td>
     <td>{{ $mahasiswa->prodi }}</td>
     <td>{{ $mahasiswa->semester }}</td>
 </tr>
</table>