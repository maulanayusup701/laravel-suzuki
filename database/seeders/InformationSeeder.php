<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Information::create([
            'whatsapp' => env('WHATSAPP', '-'),
            'instagram' => env('INSTAGRAM', '-'),
            'facebook' => env('FACEBOOK', '-'),
            'x' => env('X', '-'),
            'address' => env('ADDRESS', '-'),
            'email' => env('EMAIL', '-'),
        ]);
    }
}
