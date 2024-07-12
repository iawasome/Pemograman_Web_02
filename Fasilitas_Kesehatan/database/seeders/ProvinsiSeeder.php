<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('provinsis')->insert([
            ['nama' => 'Jawa Barat', 'ibukota' => 'Bandung', 'latitude' => -6.914744, 'longitude' => 107.609810],
            ['nama' => 'Jawa Tengah', 'ibukota' => 'Semarang', 'latitude' => -6.966667, 'longitude' => 110.416664],
            ['nama' => 'Jawa Timur', 'ibukota' => 'Surabaya', 'latitude' => -7.257472, 'longitude' => 112.752090],
            ['nama' => 'DKI Jakarta', 'ibukota' => 'Jakarta', 'latitude' => -6.208763, 'longitude' => 106.845599],
            ['nama' => 'Banten', 'ibukota' => 'Serang', 'latitude' => -6.120000, 'longitude' => 106.150276],
            ['nama' => 'Yogyakarta', 'ibukota' => 'Yogyakarta', 'latitude' => -7.795580, 'longitude' => 110.369492],
            ['nama' => 'Bali', 'ibukota' => 'Denpasar', 'latitude' => -8.670458, 'longitude' => 115.212629],
            ['nama' => 'Sumatera Utara', 'ibukota' => 'Medan', 'latitude' => 3.595196, 'longitude' => 98.672223],
            ['nama' => 'Sumatera Selatan', 'ibukota' => 'Palembang', 'latitude' => -2.990934, 'longitude' => 104.756555],
            ['nama' => 'Kalimantan Timur', 'ibukota' => 'Samarinda', 'latitude' => -0.502106, 'longitude' => 117.153709],
        ]);
    }
}
