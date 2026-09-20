<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Models\matakuliah;
use App\Http\Controllers\AkademikController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/akademik', [AkademikController::class, 'data']);