<?php

namespace Database\Seeders;

use App\Models\Destiny;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DestinySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $destinies=new Destiny();
        $destinies->origin='Cotagaita';
        $destinies->destiny='tarija';
        $destinies->price=20;
        $destinies->save();

        $origins=new Destiny();
        $origins->origin='La paz';
        $origins->destiny='Santa Cruz';
        $origins->price=26;
        $origins->save();

        $final=new Destiny();
        $final->origin='Oruro';
        $final->destiny='Potosí';
        $final->price=28;
        $final->save();
        
    }
}
