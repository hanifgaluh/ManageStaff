<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'staffa',
            'email' => 'staffa@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'staffb',
            'email' => 'staffb@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'staffc',
            'email' => 'staffc@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
