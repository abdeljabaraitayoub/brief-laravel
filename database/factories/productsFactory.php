<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\products;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class productsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->name(),
            "description" => $this->faker->text(),
            "price" => $this->faker->randomFloat(2, 1, 100),
            "image" => $this->faker->imageUrl(),
        ];
    }
}
