<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'price' => $this->faker->randomFloat(2, 5, 1000),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(640, 480, 'technics', true),
        ];
    }

    public function withCategory(array $categoryIds)
    {
        return $this->state(fn() => [
            'category_id' => $this->faker->randomElement($categoryIds),
        ]);
    }
}
