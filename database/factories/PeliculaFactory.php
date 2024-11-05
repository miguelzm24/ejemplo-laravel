<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelicula>
 */
class PeliculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isan' => $this->faker->unique()->randomNumber(5),
            'titulo' => $this->faker->sentence(2),
            'ano' => $this->faker->year(),
            'director' => $this->faker->name(),
        ];
    }
}
