<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            'Asgabat',
            'Ahal',
            'Mary',
            'Balkan',
            'Dasoguz',
            'Lebap',
        ];

        foreach ($locations as $location) {
            $obj = new Location();
            $obj->name = $location;
            $obj->save();
        }
    }
}
