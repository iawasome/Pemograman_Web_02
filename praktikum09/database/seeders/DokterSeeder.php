<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('dokters')->insert([
            [
                'kode' => 'D001',
                'nama' => 'Dr. Ahmad Subekti',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1970-01-01',
                'gender' => 'L',
                'email' => 'ahmad@example.co.id',
                'alamat' => 'Jl. Merdeka No.1',
            ],
            [
                'kode' => 'D002',
                'nama' => 'Dr. Sri Rahayu',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1975-02-02',
                'gender' => 'P',
                'email' => 'sri@example.co.id',
                'alamat' => 'Jl. Sudirman No.2',
            ],
            [
                'kode' => 'D003',
                'nama' => 'Dr. Bambang Sutrisno',
                'tmp_lahir' => 'Surabaya',
                'tgl_lahir' => '1980-03-03',
                'gender' => 'L',
                'email' => 'bambang@example.co.id',
                'alamat' => 'Jl. Thamrin No.3',
            ],
            [
                'kode' => 'D004',
                'nama' => 'Dr. Nurul Hidayati',
                'tmp_lahir' => 'Medan',
                'tgl_lahir' => '1985-04-04',
                'gender' => 'P',
                'email' => 'nurul@example.co.id',
                'alamat' => 'Jl. Gatot Subroto No.4',
            ],
            [
                'kode' => 'D005',
                'nama' => 'Dr. Agus Wiryawan',
                'tmp_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1990-05-05',
                'gender' => 'L',
                'email' => 'agus@example.co.id',
                'alamat' => 'Jl. Sudirman No.5',
            ],
        ]);
    }
}
