<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faskes extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'faskes';

    public function jenis_faskes()
    {
        return $this->belongsTo(JenisFaskes::class, 'jenis_faskes_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function kabkota()
    {
        return $this->belongsTo(Kabkota::class, 'kabkota_id');
    }

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama',
        'nama_pengelola',
        'alamat',
        'website',
        'email',
        'kabkota_id',
        'rating',
        'latitude',
        'longitude',
        'jenis_faskes_id',
        'kategori_id',
    ];

    public $timestamps = false;
}