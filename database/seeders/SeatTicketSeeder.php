<?php

namespace Database\Seeders;
use App\Models\SeatTicket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class SeatTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SeatTicket::factory(30)->create();
    }
}
