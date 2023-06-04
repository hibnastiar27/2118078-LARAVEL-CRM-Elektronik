<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nama = ['', 'Philips', 'Panasonic', 'Kawachi', 'Nexus', 'Rexus'];
        $jenis = ['', 'Kabel', 'Mouse', 'Lampu'];
        return [
            'nama' => $nama[mt_rand(1, 4)],
            'jenis' => $jenis[mt_rand(1, 3)],
            'harga' => mt_rand(10, 15) * 1000 * 11,
            'stok' => mt_rand(50, 250)
        ];
    }
}