<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Music>
 */
class MusicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'artist_id' => Artist::inRandomOrder()->first()->id,
            'album_id' => Album::inRandomOrder()->first()->id,
            'name' => fake()->firstName(),
            'audio' => fake()->firstName(),
            'viewed' => fake()->randomDigit(),
            'downloaded' => fake()->randomDigit(),
            'favorites' => fake()->randomDigit(),
        ];
    }
}
