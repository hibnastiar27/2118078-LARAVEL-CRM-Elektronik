<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'barang_id' => mt_rand(1, 5),
            'jenistransaksi_id' => mt_rand(1, 3),
            'tanggal' => fake()->date(),
            'nama' => fake()->name(),
            'trans_poin' => mt_rand(1, 5),
            'total_harga' => mt_rand(10, 15) * 1000,
        ];
    }
}