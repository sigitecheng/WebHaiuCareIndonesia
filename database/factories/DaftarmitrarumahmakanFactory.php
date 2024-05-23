<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Daftarmitrarumahmakan>
 */
class DaftarmitrarumahmakanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $cities = ['Cileunyi', 'Kopo', 'Lembang', 'Bandung Barat'];

        $city = $this->faker->randomElement($cities);

        return [

            'nama_pemilik' => $this->faker->name,
            'namarumahmakan' => $this->faker->company,
            'alamat_pemilik' => $this->faker->address,
            'alamat_rumahmakan' => $this->faker->address,
            'kota' => $city,
            // 'kota' => $this->faker->randomElement(['Cileunyi', 'Kopo', 'Lembang', 'Bandung Barat']),
            // 'alamat' => $this->faker->streetAddress . ', ' . $city . ', Indonesia',
            'telepon' => '08' . $this->faker->numerify('##########'),
            'email' => $this->faker->unique()->safeEmail,
            'ktp' => $this->faker->numerify('################'), // 16 digit KTP number
            'gambar' => $this->faker->imageUrl(640, 480, 'business'),
            'kuotamakan' => $this->faker->numberBetween(1, 10000),
            'deskripsi' => $this->faker->paragraph,
            //
        ];
    }
}
