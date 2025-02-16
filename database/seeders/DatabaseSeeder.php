<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder; // Importe o UserSeeder

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Chama o UserSeeder para rodar o seeder do usuário
        $this->call(UserSeeder::class);

        // Caso você queira também rodar a criação com factory
        // User::factory(10)->create(); 
    }
}

