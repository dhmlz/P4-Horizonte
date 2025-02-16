<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'João',
            'email' => 'jsmaciel@hotmail.com',
            'password' => bcrypt('0213454'),
            'nivel' => 'horizonte',
        ]);
    }
}