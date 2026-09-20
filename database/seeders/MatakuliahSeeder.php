<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\matakuliah;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        matakuliah::create([
            'kode_mk' => 'MK001',
            'nama_mk' => 'Pemrograman Web',
            'sks' => 5,
            'semester' => 3,
            'dosen_id' => 4,
        ]);

        matakuliah::create([
            'kode_mk' => 'MK002',
            'nama_mk' => 'Basis Data',
            'sks' => 10,
            'semester' => 4,
            'dosen_id' => 5,
        ]);

        matakuliah::create([
            'kode_mk' => 'MK003',
            'nama_mk' => 'IoT',
            'sks' => 5,
            'semester' => 5,
            'dosen_id' => 6,
        ]);

        matakuliah::create([
            'kode_mk' => 'MK004',
            'nama_mk' => 'Matematika',
            'sks' => 10,
            'semester' => 6,
            'dosen_id' => 7,
        ]);

        matakuliah::create([
            'kode_mk' => 'MK005',
            'nama_mk' => 'Jaringan',
            'sks' => 5,
            'semester' => 7,
            'dosen_id' => 8,
        ]);

        matakuliah::create([
            'kode_mk' => 'MK006',
            'nama_mk' => 'Bahasa Inggris',
            'sks' => 5,
            'semester' => 8,
            'dosen_id' => 9,
        ]);

        matakuliah::create([
            'kode_mk' => 'MK007',
            'nama_mk' => 'Struktur Data',
            'sks' => 10,
            'semester' => 1,
            'dosen_id' => 10,
        ]);
        matakuliah::create([
            'kode_mk' => 'MK008',
            'nama_mk' => 'Rekayasa perangkat lunak',
            'sks' => 10,
            'semester' => 2,
            'dosen_id' => 11,
        ]);
    }
}
