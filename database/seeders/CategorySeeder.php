<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = ['Classical music', 'Jazz', 'Hip-hop', 'Pop music', 'Electronic',
            'Music of Latin America', 'R&b', 'Blues rock', 'New-age music', 'Rock', 'Soul music'];

        foreach ($objs as $obj) {
            Category::create([
                'name' => $obj
            ]);
        }
    }
}
