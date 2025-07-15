<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

            \App\Models\User::firstOrCreate(
            ['email' => 'mike@example.com'],
            ['name' => 'mike', 'password' => bcrypt('password')]
        );

        \App\Models\User::firstOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'admin', 'password' => bcrypt('admin123'), 'role' => 'admin']
        );


         $this->call([
            UsersTableSeeder::class,
            VideosTableSeeder::class,
            UserProgressSeeder::class,
            MentorSeeder::class,
        ]);
    }
    
}
