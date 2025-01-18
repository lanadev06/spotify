<?php

namespace Database\Factories;

use App\Models\Playlist;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Playlist>
 */
class PlaylistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'name' => fake()->city(),
            'slug' => str()->random(5),
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Playlist $playlist) {

        })->afterCreating(function (Playlist $playlist) {
            $playlist->slug = str($playlist->name)->slug() . '-' . $playlist->id;
            $playlist->update();
        });
    }


}
