<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Daftarmitrarumahmakan;
use App\Models\Donatur;
use App\Models\Fundraiser;
use App\Models\Fundraising;
use App\Models\Fundraising_phase;
use App\Models\Fundraising_withdrawals;
use App\Models\Lokasimakangratis;
use App\Models\Tentangkami;
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

            Lokasimakangratis::factory()->create([
                'kota' => 'Cileunyi',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Lokasimakangratis::factory()->create([
                'kota' => 'Lembang',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            Lokasimakangratis::factory()->create([
                'kota' => 'Kopo',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            Lokasimakangratis::factory()->create([
                'kota' => 'Stasiun Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            
            // Fundraising::factory()->create([
            //     'name' => 'Cileunyi, Kab Bandung',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);
            
            Tentangkami::factory()->create([
                'nama_perusahaan' => 'PT. HaiuCare Bangun Indonesia',
                'deskripsi' => '
                HaiuCare Bangun Indonesia adalah sebuah perusahaan yang berfokus pada bidang kemanusiaan dengan misi utama untuk meningkatkan kesejahteraan masyarakat Indonesia. Melalui berbagai program dan inisiatif, HaiuCare berkomitmen untuk memberikan bantuan kepada mereka yang membutuhkan, baik dalam bentuk dukungan kesehatan, pendidikan, pemberdayaan ekonomi, serta pembangunan infrastruktur. Dengan pendekatan yang holistik, perusahaan ini berupaya menciptakan dampak positif yang berkelanjutan bagi komunitas-komunitas yang dilayani.
                
                Dalam upaya mencapai tujuannya, HaiuCare Bangun Indonesia bekerja sama dengan berbagai organisasi non-profit, pemerintah, dan sektor swasta. Program-program unggulan yang dijalankan mencakup layanan kesehatan gratis, program makan gratis untuk masyarakat kurang mampu, beasiswa pendidikan untuk anak-anak, serta pembangunan dan perbaikan infrastruktur dasar. Dengan dedikasi tinggi dan semangat kemanusiaan, HaiuCare terus berinovasi dan berkontribusi secara signifikan dalam membangun masa depan yang lebih baik bagi Indonesia.

                ',
                'berdiri' => '22 Januari 2024',
                'founder' => '',
                'alamat' => 'Jln. Puspa Kencana No 28 Bumi Panyawangan, RT.002 RW. 004 Cileunyi Kulon, Kecamatan Cileunyi, Kabupaten Bandung, Jawa Barat 40266',
                'email' => 'hbi@haiucare.com',
                'nomor_telepon' => '6282129208716',
                'website' => 'www.haiucares.com',
                'industri' => 'Layanan Sosial',

                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
            User::factory(15)->create();
            Fundraiser::factory(10)->create();
            Donatur::factory(25)->create();
            Fundraising::factory(3)->create();
            Fundraising_phase::factory(15)->create();
            Fundraising_withdrawals::factory(10)->create();
            // Lokasimakangratis::factory(4)->create();
            Daftarmitrarumahmakan::factory(7)->create();
    }
}
