<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    public function run(): void
    {
        $materials = [
            'Plasmas',
            'Demir',
            'Ayna',
        ];

        foreach ($materials as $material) {
            $obj = new Material();
            $obj->name = $material;
            $obj->save();
        }
    }
}
