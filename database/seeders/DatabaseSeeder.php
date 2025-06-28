<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
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

        User::factory()->create([

            'firstName' => 'Mohammad',
            'lastName' => 'Ahmad',
            'password' => Hash::make('12345678'),
            'email' => 'test@example.com',
        ]);
    }
}
