<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori')->insert([
            ['nama' => 'Rumah Sakit Umum'],
            ['nama' => 'Rumah Sakit Khusus'],
            ['nama' => 'Puskesmas'],
            ['nama' => 'Klinik'],
            ['nama' => 'Apotek'],
            ['nama' => 'Laboratorium Kesehatan'],
            ['nama' => 'Praktek Dokter'],
            ['nama' => 'Praktek Bidan'],
            ['nama' => 'Praktek Perawat'],
            ['nama' => 'Puskesmas Pembantu'],
        ]);
    }
}
