<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Deandre Jay Lagudas',
            'username' => 'shyet123',
            'number' => '09270867664',
            'location' => 'Canal Siquijor',
            'position' => 'cashier',
            'password' => bcrypt('test1234'),
        ]);
    }
}
