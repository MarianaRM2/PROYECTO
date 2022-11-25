<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\tipou;
use App\Models\usuario;
use App\Models\tipocate;
use App\Models\categoria;
use App\Models\productoimg;
use App\Models\producto;
use App\Models\cliente;
use App\Models\cotizacion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TipouSeeder::class,
            UsuarioSeeder::class,
            TipocateSeeder::class,
            CategoriaSeeder::class,
            ProductoimgSeeder::class,
            ProductoSeeder::class,
            ClienteSeeder::class,
            CotizacionSeeder::class,
        ]);

        tipou::factory(100)->create();
        usuario::factory(100)->create();
        tipocate::factory(100)->create();
        categoria::factory(100)->create();
        productoimg::factory(100)->create();
        producto::factory(100)->create();
        cliente::factory(100)->create();
        cotizacion::factory(100)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}