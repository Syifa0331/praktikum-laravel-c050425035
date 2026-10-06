<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index() {
        $nama = 'Syifa Noor Aulia Kinanti';
        $nim = 'C050425035';
        $prodi = 'SIKC';
        $pesan = "Halo, saya {$nama}, nim saya {$nim} dari prodi $prodi ";
        return $pesan;
    }
}
