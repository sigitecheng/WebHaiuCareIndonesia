<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
        // \App\Models\User::factory()->create([
            //     'name' => 'Test User',
            //     'email' => 'test@example.com',
            // ]);
            
            // Category::factory(4)->create();

            Category::factory()->create([
                'nama' => 'Makanan',
                'slug' => '-makanan',
                // 'icon' => 'icon-food.png', // Example icon, replace with actual file path if needed
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Category::factory()->create([
                'nama' => 'Kesehatan',
                'slug' => '-kesehatan',
                // 'icon' => 'icon-food.png', // Example icon, replace with actual file path if needed
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Category::factory()->create([
                'nama' => 'Pendidikan',
                'slug' => '-pendidikan',
                // 'icon' => 'icon-food.png', // Example icon, replace with actual file path if needed
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            Category::factory()->create([
                'nama' => 'Infrastruktur',
                'slug' => '-infrastruktur',
                // 'icon' => 'icon-food.png', // Example icon, replace with actual file path if needed
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
