<?php

namespace Database\Seeders;

use App\Models\tipou;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipouSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipou::factory()
            ->count(50)
            ->create();
        //
    }
}
