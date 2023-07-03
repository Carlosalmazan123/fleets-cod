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
        $newUser=new User();
        $newUser->name='Josue Carlos';
        $newUser->email='josuealmazam122@email.com';
        $newUser->password='123';
        $newUser->save();

        $nuevo=new User();
        $nuevo->name='Jose Luis';
        $nuevo->email='admin@admin.com';
        $nuevo->password='123';
        $nuevo->save();

        $viejo=new User();
        $viejo->name='Marco Antonio';
        $viejo->email='nuevo122@email.com';
        $viejo->password='123';
        $viejo->save();
    }
}
