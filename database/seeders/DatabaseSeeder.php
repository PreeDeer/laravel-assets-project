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
        // user must be create first before factory post.
        \App\Models\User::factory()->create([
            'name' => 'Iho Somnam',
            'email' => 'ihosomnam4741@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        \App\Models\Post::factory(10)->create();


    }
}
