<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Madel>
 */
class MadelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->isbn13()
        ];
    }
}
