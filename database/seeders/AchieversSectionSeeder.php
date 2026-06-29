<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AchieversSection;
use App\Models\Achiever;

class AchieversSectionSeeder extends Seeder
{
    public function run(): void
    {
        AchieversSection::create([
            'badge' => 'OUR ACHIEVERS',
            'title' => 'Stars Born From Stories',
        ]);

        $achievers = [
            [
                'achievement_label' => "BESTSELLER — 'WHISPERING FOREST'",
                'name'              => 'Aanya Kapoor',
                'age'               => 11,
                'image'             => 'aanya.jpg',
                'sort_order'        => 1,
                'is_active'         => true,
            ],
            [
                'achievement_label' => 'NATIONAL WINNER 2024',
                'name'              => 'Rohan Mehta',
                'age'               => 9,
                'image'             => 'rohan.jpg',
                'sort_order'        => 2,
                'is_active'         => true,
            ],
            [
                'achievement_label' => 'PUBLISHED 3 BOOKS',
                'name'              => 'Meera Iyer',
                'age'               => 12,
                'image'             => 'meera.jpg',
                'sort_order'        => 3,
                'is_active'         => true,
            ],
            [
                'achievement_label' => 'YOUNGEST AUTHOR OF THE YEAR',
                'name'              => 'Vihaan Sharma',
                'age'               => 8,
                'image'             => 'vihaan.jpg',
                'sort_order'        => 4,
                'is_active'         => true,
            ],

             [
                'achievement_label' => 'NATIONAL WINNER 2024',
                'name'              => 'Rohan Mehta',
                'age'               => 9,
                'image'             => 'rohan.jpg',
                'sort_order'        => 2,
                'is_active'         => true,
            ],
            [
                'achievement_label' => 'PUBLISHED 3 BOOKS',
                'name'              => 'Meera Iyer',
                'age'               => 12,
                'image'             => 'meera.jpg',
                'sort_order'        => 3,
                'is_active'         => true,
            ],
        ];

        foreach ($achievers as $achiever) {
            Achiever::create($achiever);
        }
    }
}