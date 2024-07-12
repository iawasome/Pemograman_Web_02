<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisFaskesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('jenis_faskes')->insert([
            ['nama' => 'Rumah Sakit', 'deskripsi' => 'Fasilitas kesehatan dengan layanan medis lengkap, termasuk rawat inap dan operasi.'],
            ['nama' => 'Klinik', 'deskripsi' => 'Fasilitas kesehatan dengan layanan medis dasar dan rawat jalan.'],
            ['nama' => 'Puskesmas', 'deskripsi' => 'Pusat Kesehatan Masyarakat yang memberikan pelayanan kesehatan primer.'],
            ['nama' => 'Apotek', 'deskripsi' => 'Tempat penjualan obat-obatan dan alat kesehatan.'],
            ['nama' => 'Laboratorium', 'deskripsi' => 'Fasilitas untuk melakukan pemeriksaan dan tes laboratorium medis.'],
        ]);
    }
}
