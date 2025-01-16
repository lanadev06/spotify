<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startAt = fake()->dateTimeBetween('-3 months', 'now');
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'starts_at' => $startAt,
            'ends_at' => Carbon::parse($startAt)->addMonth(fake()->numberBetween(1,3)),
        ];
    }
}
