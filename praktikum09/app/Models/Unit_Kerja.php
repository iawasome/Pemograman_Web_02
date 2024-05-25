<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit_Kerja extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'unit_kerjas';

    // Kolom yang dapat diisi
    protected $fillable = [
        'kode',
        'nama_unit',
        'lokasi',
    ];
}