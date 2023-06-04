<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jenistransaksi>
 */
class JenistransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = ['', 'Tunai', 'Non Tunai', 'Kredit'];
        return ['jenis' => $type[mt_rand(1, 3)],];

        // $arr[mt_rand(0, count($arr))]
    }
}