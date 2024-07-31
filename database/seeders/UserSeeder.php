<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
            User::create([
                'name' => 'Donald Duck',
                'email' => 'donald@example.com',
                'password' => Hash::make('canard'),
            ]);
    
            User::create([
                'name' => 'Mickey Mouse',
                'email' => 'mickey@example.com',
                'password' => Hash::make('souris'),
            ]);

            User::create([
                'name' => 'Peter Pan',
                'email' => 'peter@example.com',
                'password' => Hash::make('enfant'),
            ]);
        }
    }
