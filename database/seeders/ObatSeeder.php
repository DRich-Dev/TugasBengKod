<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Obat;

class ObatSeeder extends Seeder
{
    public function run()
    {
        Obat::create([
            'nama_obat' => 'Paracetamol',
            'kemasan' => 'Strip 10 Tablet',
            'harga' => 5000
        ]);

        Obat::create([
            'nama_obat' => 'Amoxicillin',
            'kemasan' => 'Botol 60 ml',
            'harga' => 15000
        ]);
    }
}
