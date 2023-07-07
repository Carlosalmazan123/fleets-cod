<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserType;
use App\Models\Customer;
use App\Models\User;
use App\Models\Destiny;
use App\Models\Fleet;
use App\Models\Seat;
use App\Models\Ticket;
use App\Models\SheetDay;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UserSeeder::class);
        $this->call(DestinySeeder::class);
        Customer::factory(30)->create();
        SheetDay::factory(20)->create();
        $this->call(FleetSeeder::class);
        
        $this->call(TicketSeeder::class);
        Seat::factory(100)->create();
        

        
    }
}
