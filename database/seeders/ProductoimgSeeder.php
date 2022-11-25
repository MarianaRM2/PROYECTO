<?php

namespace Database\Seeders;

use App\Models\productoimg;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoimgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        productoimg::factory()
            ->count(50)
            ->create();
    }
}