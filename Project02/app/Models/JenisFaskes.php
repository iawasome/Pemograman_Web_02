<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisFaskes extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'jenis_faskes';

    public function faskes()
    {
        return $this->hasMany(Faskes::class, 'jenis_faskes_id');
    }

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama',
        'deskripsi'
    ];
}

