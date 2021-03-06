<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(20);
        return [
            'name_tag' => $name,
            'slug_tag' => Str::slug($name),
            'color_tag' => $this->faker->randomElement(['red','yellow','green','blue','indigo','purple','pink'])
        ];
    }
}