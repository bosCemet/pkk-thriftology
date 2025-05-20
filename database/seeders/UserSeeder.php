<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Paijo Tekyan',
            'email' => 'paijo@gmail.com',
            'password' => Hash::make('paijo123'), 
        ]);

        User::create([
            'name' => 'Bambung',
            'email' => 'bambang@gmail.com',
            'password' => Hash::make('brambangBawang'),
        ]);
    }
}

