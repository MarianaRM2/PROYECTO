<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tipou>
 */
class TipouFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rango' => $this->faker->randomElement([
                'admin',
                'sudadmin',
                'cliente',
            ]),

            //
        ];
    }
}
