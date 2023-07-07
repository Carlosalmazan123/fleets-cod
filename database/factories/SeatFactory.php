<?php

namespace Database\Factories;

use App\Models\Fleet;
use App\Models\Ticket;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seat>
 */
class SeatFactory extends Factory
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
            'seat'=>fake()->unique()->biasedNumberBetween(),
            'fleet_id'=>Fleet::all()->random()->id,
            'ticket_id'=>Ticket::all()->random()->id,
        ];
    }
}
