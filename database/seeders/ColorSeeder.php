<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    public function run(): void
    {
        $colors = [
            'Ak',
            'Gara',
            'Cal',
            'Gonur',
            'Gyzyl',
            'Gok',
            'Yasyl',
        ];

        foreach ($colors as $color) {
            $obj = new Color();
            $obj->name = $color;
            $obj->save();
        }
    }
}
