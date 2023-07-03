<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;
use App\Models\Seat;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tickets=Ticket::factory(30)->create();
        foreach($tickets as $ticket){
            $ticket->seats()->attach([Seat::all()->random()->id]);
        }
    }
}
