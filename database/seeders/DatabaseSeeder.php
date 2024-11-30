<?php

namespace Database\Seeders;

use App\Models\Guests;
use App\Models\Users;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Guests::factory(400)->create();

        Users::factory()->create([
            'username' => 'admin',
            'password' => bcrypt('120801'),
        ]);
    }
}
