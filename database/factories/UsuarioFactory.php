<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\tipou;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\usuario>
 */
class UsuarioFactory extends Factory
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
            'nombreC' => $this->faker->name(),
            'img' => $this->faker->imageUrl($width = 640, $height = 480),
            'telefono' => $this->faker->numberBetween(
                9163850525,
                7480728290,
                3069884048
            ),
            'correo' => $this->faker->email(),
            'password' => $this->faker->password,
            'tipou_id' => tipou::InRandomOrder()->first(),
        ];
    }
}
