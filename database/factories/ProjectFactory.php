<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
            'short_description' => $this->faker->text(125),
            'description' => $this->faker->text(716),
            'image' => 'images/project/ceet_center.jpg'
        ];
    }
}
