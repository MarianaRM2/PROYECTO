<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\categoria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\productoimg>
 */
class ProductoimgFactory extends Factory
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
            //llaves foraneas
            'categoria_id' => categoria::inRandomOrder()->first(),
            'imgproduc' => $this->faker->imageUrl($width = 640, $height = 480),
            'categoriadestinada' => $this->faker->randomElement([
                'zapatos',
                'tenis',
                'botas',
                'zandalias',
            ]),
        ];
    }
}