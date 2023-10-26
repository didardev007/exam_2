<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    public function run(): void
    {
        $sellers = [
            ['name' => 'Didar', 'location_id' => Location::where('name', 'Asgabat')->firs()->id],
            ['name' => 'Selim', 'location_id' => Location::where('name', 'Ahal')->firs()->id],
            ['name' => 'Tirkesh', 'location_id' => Location::where('name', 'Asgabat')->first()->id],
            ['name' => 'Maksat', 'location_id' => Location::where('name', 'Lebap')->first()->id],
            ['name' => 'Dawut', 'location_id' => Location::where('name', 'Dasoguz')->first()->id],
            ['name' => 'Berdi', 'location_id' => Location::where('name', 'Mary')->first()->id],
            ['name' => 'Artyk', 'location_id' => Location::where('name', 'Balkan')->first()->id],
        ];

        foreach ($sellers as $seller) {
            $obj = new Seller();
            $obj->name = $seller['name'];
            $obj->location_id = $seller['location_id'];
            $obj->save();
        }
    }
}
