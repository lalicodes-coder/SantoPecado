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
            'slug' => fake()->slug(),
            'footer' => fake()->sentence(),

            'description' => fake()->paragraphs(3, true),
            'slice' => fake()->numberBetween(1, 5),

            'price' => fake()->numberBetween(15, 35),

            'image_url' => function () {
                $filename = fake()->uuid . '.jpg';

                file_put_contents(
                    storage_path('app/public/posts/' . $filename),
                    file_get_contents('https://picsum.photos/400/300')
                );

                return 'posts/' . $filename;
            }
        ];
    }
}
