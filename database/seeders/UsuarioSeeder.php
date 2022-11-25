<?php

namespace Database\Seeders;

use App\Models\usuario;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        usuario::factory()
            ->count(200)
            ->create();
        //
    }
}
