<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User ; 
use Illuminate\Support\Facades\Hash ; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Recruteur Test',
            'email' => 'recruteur@test.com',
            'password' => Hash::make('password'),
            'role' => 'recreteur',
        ]);

        User::create([
            'name' => 'Chercheur 1',
            'email' => 'chercheur1@test.com',
            'password' => Hash::make('password'),
            'role' => 'chercheur',
        ]);

        User::create([
            'name' => 'Chercheur 2',
            'email' => 'chercheur2@test.com',
            'password' => Hash::make('password'),
            'role' => 'chercheur',
        ]);

        User::create([
            'name' => 'Chercheur 3',
            'email' => 'chercheur3@test.com',
            'password' => Hash::make('password'),
            'role' => 'chercheur',
        ]);
    }
}
