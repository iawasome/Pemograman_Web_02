<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kabkota;
use App\Models\Provinsi;

class KabkotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            'Jawa Barat' => [
                ['nama' => 'Bandung', 'latitude' => -6.914744, 'longitude' => 107.609810],
                ['nama' => 'Depok', 'latitude' => -6.402484, 'longitude' => 106.794243],
                ['nama' => 'Bogor', 'latitude' => -6.595038, 'longitude' => 106.816635],
                // Tambahkan kabkota lain di Jawa Barat
            ],
            'DKI Jakarta' => [
                ['nama' => 'Jakarta', 'latitude' => -6.208763, 'longitude' => 106.845599],
                // Tambahkan kabkota lain di DKI Jakarta
            ],
            // Tambahkan provinsi dan kabkota lainnya
        ];

        foreach ($provinces as $provinsiName => $kabkotas) {
            // Cari atau buat provinsi baru
            $provinsi = Provinsi::where('nama', $provinsiName)->first();

            if (!$provinsi) {
                $provinsi = Provinsi::create(['nama' => $provinsiName]);
            }

            // Tambahkan kabkota untuk provinsi ini
            foreach ($kabkotas as $kabkota) {
                Kabkota::create(array_merge($kabkota, ['provinsi_id' => $provinsi->id]));
            }
        }
    }

}