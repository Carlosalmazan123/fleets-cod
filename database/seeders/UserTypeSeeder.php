<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserType;
class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $newUser=new UserType();
        $newUser->type='Administrador';
        $newUser->save();

        $newDriver=new UserType();
        $newDriver->type='Chofer';
        $newDriver->save();

        $newBender=new UserType();
        $newBender->type='Vendedor de Boletos';
        $newBender->save();
    }
}
