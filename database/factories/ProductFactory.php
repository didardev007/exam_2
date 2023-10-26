<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        $brand = DB::table('brands')->inRandomOrder()->first();
        $category = DB::table('categories')->inRandomOrder()->first();
        $color = DB::table('colors')->inRandomOrder()->first();
        $country = DB::table('countries')->inRandomOrder()->first();
        $material = DB::table('materials')->inRandomOrder()->first();
        $seller = DB::table('sellers')->inRandomOrder()->first();
        $guarantee = DB::table('guarantees')->inRandomOrder()->first();
        $madel = DB::table('madels')->inRandomOrder()->first();
        $name = fake()->streetName;
        $discount = fake()->boolean(20);
        return [
            'brand_id' => $brand->id,
            'category_id' => $category->id,
            'color_id' => $color->id,
            'country_id' => $country->id,
            'material_id' => $material->id,
            'seller_id' => $seller->id,
            'guarantee_id' => $guarantee->id,
            'madel_id' => $madel->id,
            'name' => $name,
            'description' => fake()->paragraph(9),
            'discount_percent' => $discount ? rand(10, 20): 0,
            'price' => rand(200, 1000),
        ];
    }
}
