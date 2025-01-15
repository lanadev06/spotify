<?php

namespace Database\Factories;

use App\Models\Artist;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'artist_id' => Artist::inRandomOrder()->first()->id,
            'name' => fake()->firstName(),
            'image' => fake()->imageUrl(),
        ];
    }
}
