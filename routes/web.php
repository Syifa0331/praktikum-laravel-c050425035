<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;
use App\Http\Controllers\MahasiswaController;
use App\Models\matakuliah;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\StatistikMahasiswaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HitungTotalSksController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', [DashboardController::class, 'index']);

Route::get('/statistik', HitungTotalSksController::class);
//Route::post('/mahasiswa-uji', [MahasiswaController::class, 'apiIndex']);

Route::get('/Re1999', function (){
    return 'Back to the future!';
});

Route::get('/Vertin', function (){
    return 'Vertin the Timekeeper';
});

Route::get('/profil', function (){
    return view('profil')
    ->with('nama', 'Fauzi')
    ->with('nim', 'c050425081')
    ->with('prodi', 'SIKC');
});

Route::get('/Akademik/statistik', function () {
    return view('Akademik.statistik');
});

Route::prefix('Akademik')->group(function () {
    Route::get('/mahasiswa/cari', [MahasiswaController::class, 'cariMahasiswa'])
    ->name('mahasiswa.cari');
Route::resource('mahasiswa', MahasiswaController::class);
//Route::get('/mahasiswa',[MahasiswaController::class, 'index'])->name('mahasiswa.index');
//Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show'])
  // ->where('nim', '[A-Za-z0-9]+')
  // ->name('mahasiswa.show');

//Route::get('/matakuliah',[MatakuliahController::class, 'index'])->name('mahasiswa.index');
Route::resource('matakuliah', MatakuliahController::class)->only(['index', 'show', 'create', 'store']);
//Route::get('/matakuliah/{kode}', [MatakuliahController::class, 'show'])
  // ->where('kode', '[A-Za-z0-9]+')
  // ->name('matakuliah.show');

});
Route::get('/akademik', [AkademikController::class, 'data']);