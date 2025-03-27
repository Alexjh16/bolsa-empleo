<?php

namespace Database\Seeders;

use App\Models\Job;
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
        // User::factory(10)->create();

        //User::factory()->create([
        //'first_name' => 'Test User',
        //    'last_name' => 'Test User',
        //    'email' => 'test@example.com',
        //]);
        $this->call([
            UserSeeder::class,
            EmployerSeeder::class,
            JobSeeder::class,
        ]);
    }
}
