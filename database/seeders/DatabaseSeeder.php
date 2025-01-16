<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Category;
use App\Models\Playlist;
use App\Models\Subscription;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Administrator',
            'username' => 'admin',
        ]);

        $this->call([
            CategorySeeder::class,
        ]);

        Artist::factory()
            ->count(10)
            ->has(Album::factory()->count(3))
            ->create();

        User::factory()
            ->count(10)
            ->has(Playlist::factory()->count(2))
            ->has(Subscription::factory()->count(1))
            ->create();

        Playlist::factory()
            ->count(10)
            ->create();

    }
}
