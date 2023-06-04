<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelanggan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Barang::factory(5)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Jenistransaksi::factory(3)->create();
        \App\Models\Sarankritik::factory(5)->create();
        // \App\Models\Transaksi::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}