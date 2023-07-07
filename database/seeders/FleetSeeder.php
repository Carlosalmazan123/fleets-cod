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
        $fleets=new Fleet();
        $fleets->type='nissan';
        $fleets->bathroom='Si';
        $fleets->sheet_day_id=1;
        $fleets->save();
    }
}
