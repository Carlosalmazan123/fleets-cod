<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $nuevo=new User();
        $nuevo->name='Administrador';
        $nuevo->email='admin@admin.com';
        $nuevo->user_type='Administrador';
        $nuevo->password='123';
        $nuevo->save();
        
            $newUser=new User();
        $newUser->name='Josue Carlos';
        $newUser->email='josuealmaza122@email.com';
        $newUser->user_type='Carretillero/a';
        $newUser->password='123';
        $newUser->save();

        

        $viejo=new User();
        $viejo->name='Marco Antonio';
        $viejo->email='nuevo122@email.com';
        $viejo->user_type='Vendedor/a de Boletos';
        $viejo->password='123';
        $viejo->save();
        

        

        
    }
}
