<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    use HasFactory;
    
    protected $fillable = ['kode_mk', 'nama_mk', 'sks', 'semester', 'dosen_id'];

    public function mahasiswas(): BelongsToMany
    {
        return $this->belongsToMany(Mahasiswa::class);
    }
}