<?php

namespace Database\Seeders;

use App\Models\cotizacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CotizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        cotizacion::factory()
            ->count(50)
            ->create();
    }
}