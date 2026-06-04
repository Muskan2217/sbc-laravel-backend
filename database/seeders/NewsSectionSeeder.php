<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsSection;
use App\Models\News;

class NewsSectionSeeder extends Seeder
{
    public function run(): void
    {
        NewsSection::create([
            'badge'     => 'NEWS & ANNOUNCEMENTS',
            'title'     => 'The Latest from Stories By Children',
            'btn_label' => 'All Updates',
            'btn_url'   => '/news',
        ]);

        $news = [
            [
                'category'       => 'CONTEST',
                'category_color' => 'yellow',
                'date'           => '2026-04-12',
                'title'          => 'Budding Authors 2026 Contest now open for entries',
                'excerpt'        => '₹5L+ in prizes, 50 published winners and global mentorship.',
                'btn_label'      => 'Read more',
                'url'            => '/news/budding-authors-2026',
                'sort_order'     => 1,
                'is_active'      => true,
            ],
            [
                'category'       => 'EVENT',
                'category_color' => 'green',
                'date'           => '2026-03-28',
                'title'          => 'SBC Litfest brings together 2,000 young writers in Mumbai',
                'excerpt'        => 'Three days of workshops, readings and book launches.',
                'btn_label'      => 'Read more',
                'url'            => '/news/sbc-litfest-2026',
                'sort_order'     => 2,
                'is_active'      => true,
            ],
            [
                'category'       => 'MEDIA',
                'category_color' => 'gray',
                'date'           => '2026-03-14',
                'title'          => "Featured in The Hindu's Education Plus Sunday edition",
                'excerpt'        => "How young Indian authors are reshaping children's publishing.",
                'btn_label'      => 'Read more',
                'url'            => '/news/hindu-education-plus',
                'sort_order'     => 3,
                'is_active'      => true,
            ],
        ];

        foreach ($news as $item) {
            News::create($item);
        }
    }
}