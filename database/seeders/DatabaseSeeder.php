<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use function Laravel\Prompts\password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'staffa',
            'email' => 'staffa@gmail.com',
            'password' => bcrypt('password'),
            'leader' => 'leada'
        ]);

        User::factory()->create([
            'name' => 'staffb',
            'email' => 'staffb@gmail.com',
            'password' => bcrypt('password'),
            'leader' => 'leada'
        ]);

        User::factory()->create([
            'name' => 'staffc',
            'email' => 'staffc@gmail.com',
            'password' => bcrypt('password'),
            'leader' => 'leadb'
        ]);

        User::factory()->create([
            'name' => 'staffd',
            'email' => 'staffd@gmail.com',
            'password' => bcrypt('password'),
            
        ]);

        User::factory()->create([
            'name' => 'staffe',
            'email' => 'staffe@gmail.com',
            'password' => bcrypt('password'),
            
        ]);

        User::factory()->create([
            'name' => 'staffg',
            'email' => 'staffg@gmail.com',
            'password' => bcrypt('password'),
            
        ]);

        User::factory()->create([
            'name' => 'staffh',
            'email' => 'staffh@gmail.com',
            'password' => bcrypt('password'),
            
        ]);

        User::factory()->create([
            'name' => 'leada',
            'email' => 'leada@gmail.com',
            'password' => bcrypt('password'),
            'leader' => 'leadera'
        ]);

        User::factory()->create([
            'name' => 'leadb',
            'email' => 'leadb@gmail.com',
            'password' => bcrypt('password'),
            'leader' => 'leaderb'
        ]);
    }
}
