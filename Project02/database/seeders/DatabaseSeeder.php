<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([FaskesSeeder::class]);
        $this->call([KabkotaSeeder::class,]);
        $this->call([JenisFaskesSeeder::class,]);
        $this->call([KategoriSeeder::class,]);
        $this->call([ProvinsiSeeder::class,]);
        
    }
}
