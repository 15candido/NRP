<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Need>
 */
class NeedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $name = $this->faker->sentence(6),
            'slug' => Str::slug($name),
            'description' => fake()->text(500),
            'start' => fake()->date(),
            'end' => fake()->date()
        ];
    }
}
