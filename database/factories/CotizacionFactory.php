<?php

namespace Database\Factories;

use App\Models\producto;
use App\Models\usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cotizacion>
 */
class CotizacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'descripcion' => $this->faker->text(),
            'producto_id' => producto::inRandomOrder()->first(),
            'usuario_id' => usuario::inRandomOrder()->first(),
        ];
    }
}