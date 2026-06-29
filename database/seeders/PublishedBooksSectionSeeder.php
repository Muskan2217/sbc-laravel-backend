<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PublishedBooksSection;
use App\Models\Book;

class PublishedBooksSectionSeeder extends Seeder
{
    public function run(): void
    {
        PublishedBooksSection::create([
            'badge'     => 'PUBLISHED BOOKS',
            'title'     => 'Original Stories. Young Authors. Real Books.',
            'btn_label' => 'View All Books',
            'btn_url'   => '/books',
        ]);

        $books = [
            [
                'book_number'  => 'SBC #1',
                'title'        => 'The Whispering Forest',
                'author_name'  => 'Ananya',
                'author_age'   => 11,
                'image'        => 'book1.jpg',
                'amazon_url'   => 'https://amazon.in',
                'flipkart_url' => 'https://flipkart.com',
                'sort_order'   => 1,
                'is_active'    => true,
            ],
            [
                'book_number'  => 'SBC #2',
                'title'        => 'Stars in My Backpack',
                'author_name'  => 'Rohan',
                'author_age'   => 9,
                'image'        => 'book2.jpg',
                'amazon_url'   => 'https://amazon.in',
                'flipkart_url' => 'https://flipkart.com',
                'sort_order'   => 2,
                'is_active'    => true,
            ],
            [
                'book_number'  => 'SBC #3',
                'title'        => 'The Girl Who Painted Rain',
                'author_name'  => 'Meera',
                'author_age'   => 12,
                'image'        => 'book3.jpg',
                'amazon_url'   => 'https://amazon.in',
                'flipkart_url' => 'https://flipkart.com',
                'sort_order'   => 3,
                'is_active'    => true,
            ],
            [
                'book_number'  => 'SBC #4',
                'title'        => 'Adventures of Captain Mango',
                'author_name'  => 'Vihaan',
                'author_age'   => 8,
                'image'        => 'book4.jpg',
                'amazon_url'   => 'https://amazon.in',
                'flipkart_url' => 'https://flipkart.com',
                'sort_order'   => 4,
                'is_active'    => true,
            ],
            [
                'book_number'  => 'SBC #5',
                'title'        => 'The Secret of Cloud Nine',
                'author_name'  => 'Ishita',
                'author_age'   => 10,
                'image'        => 'book5.jpg',
                'amazon_url'   => 'https://amazon.in',
                'flipkart_url' => 'https://flipkart.com',
                'sort_order'   => 5,
                'is_active'    => true,
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}