<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\matakuliah;

class AkademikController extends Controller
{
    public function data()
    {
        $mahasiswa = Mahasiswa::all();
        $matakuliah = matakuliah::all();

        return view('akademik', compact('mahasiswa', 'matakuliah'));
    }
}
