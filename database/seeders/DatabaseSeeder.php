<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Pastikan ini ada
use App\Models\Periksa; // Jika dibutuhkan
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'nama' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Tambahkan Seeder yang telah dibuat
        $this->call([
            UserSeeder::class,
            PeriksaSeeder::class,
        ]);
    }
}