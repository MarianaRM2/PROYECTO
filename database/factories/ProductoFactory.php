<?php

namespace Database\Factories;

use App\Models\categoria;
use App\Models\productoimg;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\producto>
 */
class ProductoFactory extends Factory
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
            'nombreProducto' => $this->faker->randomElement([
                'zapatos escolares',
                'zapatos con tacon',
                'zapatos de pico',
                'tenis',
                'tenis escolares',
                'tenis deportivos',
                'tenis de moda',
                'botas',
                'botas de mujer',
                'botas de hombre',
                'botas baile',
                'botas para agua',
                'zandalias',
                'chanclas',
            ]),
            'precio' => $this->faker->randomfloat(200, 300, 600),
            'cantidad' => $this->faker->randomElement(['5', '12', '6', '7']),
            'infoProveedor' => $this->faker->text(),
            'modelo' => $this->faker->randomElement([
                'botas',
                'zapatos',
                'tenis',
                'zandalias',
            ]),
            'color' => $this->faker->randomElement([
                'negros',
                'blancos',
                'cafes',
                'gris',
            ]),
            'descripcion' => $this->faker->text(),
            'categoria_id' => categoria::inRandomOrder()->first(),
            'productoimg_id' => productoimg::inRandomOrder()->first(),
        ];
    }
}