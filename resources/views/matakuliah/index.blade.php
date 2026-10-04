@extends('layouts.app')

@section('judul', 'Daftar Mata kuliah')

@section('konten')
<h1>Daftar Matakuliah</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Semester</th>
                <th>SKS</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($matakuliah as $index => $mk)
            <tr>
                <td>
                    {{ $loop->iteration }}
                    @if ($loop->first)
                     - Data Pertama
                    @endif

                    @if ($loop->last)
                     - Data Terakhir
                    @endif
                </td>

                <td>{{ $index + 1 }}</td>
                <td>{{ $mk->kode_mk }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->semester }}</td>
                <td>
                    @if ($mk->sks > 5)
                     <strong>SKS Besar</strong>
                    @else
                     SKS Normal
                    @endif
                </td>
                <td><a href="{{ route('matakuliah.show', $mk->id) }}">Lihat Detail</a></td>
            </tr>
            @empty
              <tr>
                <td colspan="6">
                    Belum ada data matakuliah
                </td>
              </tr>    
            @endforelse
        </tbody>
    </table>
@endsection