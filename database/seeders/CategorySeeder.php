<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Mikrowolnowkalar',
            'Duhowkalar',
            'Blenderlar',
            'Mixerlar',
            'Et masynlar',
            'Telewizorlar',
        ];

        foreach ($categories as $category) {
            $obj = new Category();
            $obj->name = $category;
            $obj->save();
        }
    }
}
