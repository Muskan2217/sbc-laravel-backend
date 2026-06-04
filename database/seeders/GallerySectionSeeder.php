<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GallerySection;
use App\Models\GalleryItem;

class GallerySectionSeeder extends Seeder
{
    public function run(): void
    {
        GallerySection::create([
            'badge'     => 'GALLERY',
            'title'     => 'Moments of Magic',
            'btn_label' => 'View Gallery',
            'btn_url'   => '/gallery',
        ]);
$items = [
    [
        'label'      => 'Book Launches',
        'image'      => 'gallery1.jpg',
        'span'       => 'tall',
        'sort_order' => 1,
        'is_active'  => true,
    ],
    [
        'label'      => 'Festivals',
        'image'      => 'gallery2.jpg',
        'span'       => 'normal',
        'sort_order' => 2,
        'is_active'  => true,
    ],
    [
        'label'      => 'Workshops',
        'image'      => 'gallery3.jpg',
        'span'       => 'normal',
        'sort_order' => 3,
        'is_active'  => true,
    ],
    [
        'label'      => 'Contests',
        'image'      => 'gallery4.jpg',
        'span'       => 'normal',
        'sort_order' => 4,
        'is_active'  => true,
    ],
    [
        'label'      => 'Award Night',
        'image'      => 'gallery5.jpg',
        'span'       => 'normal',
        'sort_order' => 5,
        'is_active'  => true,
    ],
    [
        'label'      => 'Story Sessions',
        'image'      => 'gallery6.jpg',
        'span'       => 'wide',
        'sort_order' => 6,
        'is_active'  => true,
    ],
    [
        'label'      => 'Student Events',
        'image'      => 'gallery7.jpg',
        'span'       => 'normal',
        'sort_order' => 7,
        'is_active'  => true,
    ],
    [
        'label'      => 'Reading Circle',
        'image'      => 'gallery8.jpg',
        'span'       => 'normal',
        'sort_order' => 8,
        'is_active'  => true,
    ],
    [
        'label'      => 'Publishing Day',
        'image'      => 'gallery9.jpg',
        'span'       => 'normal',
        'sort_order' => 9,
        'is_active'  => true,
    ],
    [
        'label'      => 'Annual Fest',
        'image'      => 'gallery10.jpg',
        'span'       => 'normal',
        'sort_order' => 10,
        'is_active'  => true,
    ],
];

        foreach ($items as $item) {
            GalleryItem::create($item);
        }
    }
}