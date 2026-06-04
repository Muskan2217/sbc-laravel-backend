<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Winner;

class WinnerSeeder extends Seeder
{
    public function run(): void
    {
        Winner::insert([
            [
                'rank'         => 1,
                'name'         => 'Aarav Sharma',
                'age'          => 10,
                'story_title'  => 'The Magic Forest',
                'contest_type' => 'Story Writing',
                'medal'        => 'gold',
                'image'        => 'winner1.jpg',
                'sort_order'   => 1,
                'is_active'    => true,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'rank'         => 2,
                'name'         => 'Meera Kapoor',
                'age'          => 9,
                'story_title'  => 'The Flying Book',
                'contest_type' => 'Reading Contest',
                'medal'        => 'silver',
                'image'        => 'winner2.jpg',
                'sort_order'   => 2,
                'is_active'    => true,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'rank'         => 3,
                'name'         => 'Kabir Verma',
                'age'          => 11,
                'story_title'  => 'Adventures of Leo',
                'contest_type' => 'Poetry Contest',
                'medal'        => 'bronze',
                'image'        => 'winner3.jpg',
                'sort_order'   => 3,
                'is_active'    => true,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }
}