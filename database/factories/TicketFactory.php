<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Destiny;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
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
            'total'=>fake()->biasedNumberBetween(),
            'schedule'=>fake()->randomElement(['09:00','14:00','17:00']),
            'user_id'=>User::all()->random()->id,
            'destiny_id'=>Destiny::all()->random()->id,
        ];
    }
}
