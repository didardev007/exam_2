<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $countries = [
            'Made in China',
            'Made in Dubai',
            'Made in Mary',
            'Made in USA',
            'Made in Japan',
            'Made in Vietnam',
            'Made in Turkey',
        ];

        foreach ($countries as $country) {
            $obj = new Country();
            $obj->name = $country;
            $obj->save();
        }
    }
}
