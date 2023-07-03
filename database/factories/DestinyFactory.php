<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destiny>
 */
class DestinyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'origin'=>fake()->state(),
            'destiny'=>fake()->state(),
            'price'=>fake()->biasedNumberBetween()
        ];
    }
}
