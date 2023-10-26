<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LocationSeeder::class,
            CategorySeeder::class,
            BrandSeeder::class,
            SellerSeeder::class,
            CountrySeeder::class,
            MaterialSeeder::class,
            ColorSeeder::class,
        ]);
        \App\Models\Guarantee::factory(10)->create();
        \App\Models\Madel::factory(300)->create();
        \App\Models\Product::factory(300)->create();
    }
}
