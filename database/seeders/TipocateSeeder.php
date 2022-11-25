<?php

namespace Database\Seeders;

use App\Models\tipocate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipocateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipocate::factory()
            ->count(50)
            ->create();
        //
    }
}
