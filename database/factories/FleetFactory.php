<?php

namespace Database\Factories;

use id;
use App\Models\SheetDay;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fleet>
 */
class FleetFactory extends Factory
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
            'type'=>fake()->word(),
            'bathroom'=>fake()->randomElement(['Si','No']),
            'sheet_day_id'=>SheetDay::all()->random()->id
        ];
    }
}
