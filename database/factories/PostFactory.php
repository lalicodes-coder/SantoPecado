<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'title' => fake()->randomElement([
                'Tarta de Kinder',
                'Cheesecake de Pistacho',
                'Red Velvet',
                'Tarta de Oreo',
                'Pantera Rosa'
            ]),

            'description' => fake()->sentence(),

            'price' => fake()->numberBetween(15, 35),

            'image_url' => fake()->imageUrl(400, 300, 'food', true)
        ];
    }
}
