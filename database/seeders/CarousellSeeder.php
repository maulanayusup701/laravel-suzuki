<?php

namespace Database\Seeders;

use App\Models\Carousell;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarousellSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Carousell::create([
            'name' => 'Carousell-1',
            'image' => 'carousell-images/carousell-1.webp',
        ]);

        Carousell::create([
            'name' => 'Carousell-2',
            'image' => 'carousell-images/carousell-2.webp',
        ]);

        Carousell::create([
            'name' => 'Carousell-3',
            'image' => 'carousell-images/carousell-3.webp',
        ]);
    }
}
