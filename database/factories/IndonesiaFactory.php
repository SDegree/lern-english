<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Indonesia>
 */
class IndonesiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'english_id' => mt_rand(1, 5),
            'kosakata' => fake()->word(),
            'level' => mt_rand(1, 5)
        ];
    }
}
