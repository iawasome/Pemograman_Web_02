<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('unit_kerjas')->insert([
            [
                'kode' => 'UK001',
                'nama_unit' => 'Keuangan',
                'lokasi' => 'Jakarta',
            ],
            [
                'kode' => 'UK002',
                'nama_unit' => 'Sumber Daya Manusia',
                'lokasi' => 'Bandung',
            ],
            [
                'kode' => 'UK003',
                'nama_unit' => 'Teknologi Informasi',
                'lokasi' => 'Surabaya',
            ],
            [
                'kode' => 'UK004',
                'nama_unit' => 'Pemasaran',
                'lokasi' => 'Medan',
            ],
            [
                'kode' => 'UK005',
                'nama_unit' => 'Operasional',
                'lokasi' => 'Yogyakarta',
            ],
        ]);
    }
}
