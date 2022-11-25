<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\tipocate;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\categoria>
 */
class CategoriaFactory extends Factory
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
            'nombre_categ' => $this->faker->randomElement([
                'zapatos',
                'tenis',
                'botas',
                'zandalias',
            ]),
            'categorianame' => $this->faker->randomElement([
                '1',
                '2',
                '3',
                '4',
            ]),
            'tipo_categoria' => $this->faker->randomDigit(7),
            'tipocate_id' => tipocate::inRandomOrder()->first(),
        ];
    }
}