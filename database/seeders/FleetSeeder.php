<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fleet;
use App\Models\Image;
use App\Models\SheetDay;

class FleetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $fake_fleet=Fleet::factory(30)->create();

        foreach($fake_fleet as $fleet){
            $image=new Image();
            $image->image='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHhsGD2TKOLRpaE0CfgFZ3NRxE84OVSFB0BQ&usqp=CAU';
            $image->fleet_id=$fleet->id;
            $image->save();
            $image=new Image();
            $image->image='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHhsGD2TKOLRpaE0CfgFZ3NRxE84OVSFB0BQ&usqp=CAU';
            $image->fleet_id=$fleet->id;
            $image->save();
    }
    }
}
