<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'genre' => fake()->randomElement(['Action', 'Comedy', 'Drama', 'Horror', 'Sci-Fi']),
            'duration_minutes' => fake()->numberBetween(80, 180),
        ];
    }
}
