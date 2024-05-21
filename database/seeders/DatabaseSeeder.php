<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Donatur;
use App\Models\Fundraiser;
use App\Models\Fundraising;
use App\Models\Fundraising_phase;
use App\Models\Fundraising_withdrawals;
use App\Models\User;
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


            User::create([
                'name'  => 'adminadmin',
                // 'username' => 'adminadmin',
                'email' => 'adminadmin@gmail.com',
                'avatar' => 'hayuah',
                'password' => bcrypt('adminadmin'),
                'is_admin' => 'super_admin',
            ]);

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


            User::factory(15)->create();
            Fundraiser::factory(5)->create();
            Donatur::factory(25)->create();
            Fundraising::factory(25)->create();
            Fundraising_phase::factory(15)->create();
            Fundraising_withdrawals::factory(10)->create();
    }
}
