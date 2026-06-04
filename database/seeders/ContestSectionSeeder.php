<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contest;
use App\Models\Winner;

class ContestSectionSeeder extends Seeder
{
    public function run(): void
    {
        $contests = [
            [
                'category'   => 'READ & DRAW',
                'title'      => 'Read & Draw Challenge',
                'description'=> 'Read a beautiful short story and turn your imagination into colourful artwork. Top entries get featured in our gallery.',
                'closes_at'  => now()->addDays(5),
                'btn_label'  => 'Join Contest',
                'btn_url'    => '/contests/read-and-draw',
                'sort_order' => 1,
                'is_active'  => true,
            ],
            [
                'category'   => 'STORY WRITING',
                'title'      => 'Budding Authors Contest 2026',
                'description'=> 'Write a short story on the theme of friendship and nature. Winners get published in our annual anthology.',
                'closes_at'  => now()->addDays(12),
                'btn_label'  => 'Join Contest',
                'btn_url'    => '/contests/budding-authors',
                'sort_order' => 2,
                'is_active'  => true,
            ],
            [
                'category'   => 'POETRY',
                'title'      => 'Young Poets Championship',
                'description'=> 'Express your heart through poetry. Any theme, any style. Best poems win national recognition and prizes.',
                'closes_at'  => now()->addDays(20),
                'btn_label'  => 'Join Contest',
                'btn_url'    => '/contests/young-poets',
                'sort_order' => 3,
                'is_active'  => true,
            ],
            [
                'category'   => 'READING CONTEST',
                'title'      => 'Reading Marathon 2026',
                'description'=> 'Read as many books as you can in 30 days. Log your reads, write mini reviews and win exciting prizes.',
                'closes_at'  => now()->addDays(30),
                'btn_label'  => 'Join Contest',
                'btn_url'    => '/contests/reading-marathon',
                'sort_order' => 4,
                'is_active'  => true,
            ],
        ];

        foreach ($contests as $contest) {
            Contest::create($contest);
        }

        $winners = [
            // Story Writing
            [
                'rank'         => 1,
                'name'         => 'Aanya Kapoor',
                'age'          => 11,
                'story_title'  => 'Whispering Forest',
                'contest_type' => 'Story Writing',
                'medal'        => 'GOLD',
                'image'        => 'winner1.jpg',
                'sort_order'   => 1,
                'is_active'    => true,
            ],
            [
                'rank'         => 2,
                'name'         => 'Rohan Mehta',
                'age'          => 9,
                'story_title'  => 'Colors of Courage',
                'contest_type' => 'Story Writing',
                'medal'        => 'SILVER',
                'image'        => 'winner2.jpg',
                'sort_order'   => 2,
                'is_active'    => true,
            ],
            [
                'rank'         => 3,
                'name'         => 'Meera Iyer',
                'age'          => 12,
                'story_title'  => 'Stars in My Pocket',
                'contest_type' => 'Story Writing',
                'medal'        => 'GOLD',
                'image'        => 'winner3.jpg',
                'sort_order'   => 3,
                'is_active'    => true,
            ],

            // Reading Contest
            [
                'rank'         => 1,
                'name'         => 'Vihaan Sharma',
                'age'          => 8,
                'story_title'  => '42 Books in 30 Days',
                'contest_type' => 'Reading Contest',
                'medal'        => 'GOLD',
                'image'        => 'winner4.jpg',
                'sort_order'   => 1,
                'is_active'    => true,
            ],
            [
                'rank'         => 2,
                'name'         => 'Priya Nair',
                'age'          => 10,
                'story_title'  => '38 Books in 30 Days',
                'contest_type' => 'Reading Contest',
                'medal'        => 'SILVER',
                'image'        => 'winner5.jpg',
                'sort_order'   => 2,
                'is_active'    => true,
            ],
            [
                'rank'         => 3,
                'name'         => 'Arjun Das',
                'age'          => 11,
                'story_title'  => '35 Books in 30 Days',
                'contest_type' => 'Reading Contest',
                'medal'        => 'BRONZE',
                'image'        => 'winner6.jpg',
                'sort_order'   => 3,
                'is_active'    => true,
            ],

            // Poetry Contest
            [
                'rank'         => 1,
                'name'         => 'Kavya Reddy',
                'age'          => 13,
                'story_title'  => 'The River Speaks',
                'contest_type' => 'Poetry Contest',
                'medal'        => 'GOLD',
                'image'        => 'winner7.jpg',
                'sort_order'   => 1,
                'is_active'    => true,
            ],
            [
                'rank'         => 2,
                'name'         => 'Aarav Singh',
                'age'          => 10,
                'story_title'  => 'Monsoon Dreams',
                'contest_type' => 'Poetry Contest',
                'medal'        => 'SILVER',
                'image'        => 'winner8.jpg',
                'sort_order'   => 2,
                'is_active'    => true,
            ],
            [
                'rank'         => 3,
                'name'         => 'Ishita Joshi',
                'age'          => 9,
                'story_title'  => 'My Grandmother\'s Hands',
                'contest_type' => 'Poetry Contest',
                'medal'        => 'BRONZE',
                'image'        => 'winner9.jpg',
                'sort_order'   => 3,
                'is_active'    => true,
            ],
        ];

        foreach ($winners as $winner) {
            Winner::create($winner);
        }
    }
}