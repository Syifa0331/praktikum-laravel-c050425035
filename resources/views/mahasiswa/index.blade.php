@extends('layouts.app')

@section('judul', 'Daftar Mahasiswa')

@section('konten')
 <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpaddings="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Semester</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswa as $index => $mhs)
             <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->prodi }}</td>
                <td>
                    @switch(true)
                     @case($mhs->semester <= 2)
                        <span>Mahasiswa Baru</span>
                        @break
                     @case($mhs->semester >= 7)
                        <span>Tingkat Akhir</span>
                        @break
                     @default
                        <span>Mahasiswa Aktif</span>
                    @endswitch
                </td>
                <td><a href="{{ route('mahasiswa.show', $mhs->id) }}">Lihat Detail</a></td>
             </tr>
            @empty   
            @endforelse
        </tbody>
    </table>

@endsection