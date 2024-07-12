<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    public function faskes()
    {
        return $this->hasMany(Faskes::class, 'kategori_id');
    }

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama',
    ];
}