<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\English>
 */
class EnglishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'indonesia_id' => mt_rand(1, 5),
            'vocabulary' => fake()->word(),
            'level' => mt_rand(1, 5)
        ];
    }
}
