<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('periksas')->insert([
            [
                'tanggal' => '2023-01-01',
                'berat' => 70,
                'tinggi' => 175,
                'tensi' => 120,
                'keterangan' => 'Normal',
                'pasien_id' => 1, 
                'dokter_id' => 1,
            ],
            [
                'tanggal' => '2023-01-02',
                'berat' => 65,
                'tinggi' => 160,
                'tensi' => 110,
                'keterangan' => 'Slightly low blood pressure',
                'pasien_id' => 2,
                'dokter_id' => 2,
            ],
            [
                'tanggal' => '2023-01-03',
                'berat' => 80,
                'tinggi' => 180,
                'tensi' => 130,
                'keterangan' => 'Normal',
                'pasien_id' => 3,
                'dokter_id' => 3,
            ],
            [
                'tanggal' => '2023-01-04',
                'berat' => 55,
                'tinggi' => 150,
                'tensi' => 100,
                'keterangan' => 'Low blood pressure',
                'pasien_id' => 4,
                'dokter_id' => 4,
            ],
            [
                'tanggal' => '2023-01-05',
                'berat' => 75,
                'tinggi' => 170,
                'tensi' => 125,
                'keterangan' => 'Normal',
                'pasien_id' => 5,
                'dokter_id' => 5,
            ],
        ]);
    }
}
