<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Dosen 1',
            'email' => 'dosen1@kampus.ac.id',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Dosen 2',
            'email' => 'dosen2@kampus.ac.id',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Dosen 3',
            'email' => 'dosen3@kampus.ac.id',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Dosen 4',
            'email' => 'dosen4@kampus.ac.id',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Dosen 5',
            'email' => 'dosen5@kampus.ac.id',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Dosen 6',
            'email' => 'dosen6@kampus.ac.id',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Dosen 7',
            'email' => 'dosen7@kampus.ac.id',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Dosen 8',
            'email' => 'dosen8@kampus.ac.id',
            'password' => Hash::make('password'),
        ]);
    }
}
