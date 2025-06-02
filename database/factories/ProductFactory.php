<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'price' => $this->faker->randomFloat(2, 5, 1000),
            'description' => $this->faker->paragraph(),
            'rating' => $this->faker->randomFloat(2, 3, 5),
            'image' => $this->faker->imageUrl(640, 480, 'fashion', true),
            'secondary_image' => $this->faker->imageUrl(640, 480, 'fashion', true),
            'url' => $this->faker->url(),
            'type' => $this->faker->randomElement(['simple', 'variable']),
        ];
    }

    public function withCategory(array $categoryIds)
    {
        return $this->state(fn() => [
            'category_id' => $this->faker->randomElement($categoryIds),
        ]);
    }

    public function withName(string $title)
    {
        return $this->state([
            'name' => $title,
        ]);
    }

    public function withPrice(float $price)
    {
        return $this->state([
            'price' => $price,
        ]);
    }

    public function withRating(float $rating)
    {
        return $this->state([
            'rating' => $rating,
        ]);
    }

    public function withImage(string $imageUrl)
    {
        return $this->state([
            'image' => $imageUrl,
        ]);
    }

    public function withSecondaryImage(?string $secondaryImageUrl)
    {
        return $this->state([
            'secondary_image' => $secondaryImageUrl,
        ]);
    }

    public function withUrl(string $url)
    {
        return $this->state([
            'url' => $url,
        ]);
    }

    public function withType(string $type)
    {
        return $this->state([
            'type' => $type,
        ]);
    }
}
