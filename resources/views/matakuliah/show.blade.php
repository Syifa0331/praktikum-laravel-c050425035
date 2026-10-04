@extends('layouts.app')

@section('judul', 'Detail Mahasiswa - ' . $matakuliah->nama)

@section('konten')
<h1>Detail Matakuliah</h1>
    <p><strong>KODE:</strong>{{ $matakuliah->kode_mk }}</p>
    <p><strong>Nama:</strong>{{ $matakuliah->nama_mk }}</p>
    <p><strong>SKS:</strong>{{ $matakuliah->sks }}</p>
    <p><strong>Semester:</strong>{{ $matakuliah->semester }}</p>
    <a href="{{ route('matakuliah.index') }}">&laquo; Kembali ke Daftar Matakuliah</a>
@endsection