<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            InformationSeeder::class,
            ProductSeeder::class,
            TestimonialsSeeder::class,
            CarousellSeeder::class
        ]);
    }
}
