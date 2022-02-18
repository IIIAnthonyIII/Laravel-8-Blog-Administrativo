<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //Hola mundo como estas -> nombre normal
        //hola-mundo-como-estas -> slug, convierte todo minuscula y cambia espacio por guiones
        $name = $this->faker->unique()->word(20);
        return [
            'name_category' => $name,
            'slug_category' => Str::slug($name),
        ];
    }
}