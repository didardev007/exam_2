<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            'Hitachi',
            'Gree',
            'Superai',
            'IKEA',
            'Phillips',
            'Tefal',
            'Brown',
            'LG',
            'Samsung',
            'Panasonic',
        ];

        foreach ($brands as $brand) {
            $obj = new Brand();
            $obj->name = $brand;
            $obj->save();
        }
    }
}
