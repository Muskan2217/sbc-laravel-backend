<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CoursesSection;
use App\Models\CourseLevel;

class CoursesSectionSeeder extends Seeder
{
    public function run(): void
    {
        CoursesSection::create([
            'badge'       => 'STRUCTURED PROGRAM',
            'title'       => 'Word Ninjas — A Creative Writing Journey',
            'description' => 'A four-level progression that grows with your child — from first sentences to a full manuscript.',
            'cta_label'   => 'Enroll Your Child', 
            'cta_url'     => '/enroll',
            ]);

        $levels = [
            [
                'level_label' => 'LEVEL 1',
                'title'       => 'Word Sprout',
                'age_range'   => 'Ages 6–8',
                'description' => 'Vocabulary, sentence-craft & first stories.',
                'btn_label'   => 'Learn more',
                'btn_url'     => '/courses/word-sprout',
                'sort_order'  => 1,
            ],
            [
                'level_label' => 'LEVEL 2',
                'title'       => 'Word Warrior',
                'age_range'   => 'Ages 8–10',
                'description' => 'Plot, characters & creative voice.',
                'btn_label'   => 'Learn more',
                'btn_url'     => '/courses/word-warrior',
                'sort_order'  => 2,
            ],
            [
                'level_label' => 'LEVEL 3',
                'title'       => 'Word Sensei',
                'age_range'   => 'Ages 10–12',
                'description' => 'Genre mastery & long-form writing.',
                'btn_label'   => 'Learn more',
                'btn_url'     => '/courses/word-sensei',
                'sort_order'  => 3,
            ],
            [
                'level_label' => 'LEVEL 4',
                'title'       => 'Word Ninja',
                'age_range'   => 'Ages 12+',
                'description' => 'Manuscript writing & publication ready.',
                'btn_label'   => 'Learn more',
                'btn_url'     => '/courses/word-ninja',
                'sort_order'  => 4,
            ],
        ];

        foreach ($levels as $level) {
            CourseLevel::create($level);
        }
    }
}