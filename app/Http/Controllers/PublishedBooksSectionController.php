<?php

namespace App\Http\Controllers;

use App\Models\PublishedBooksSection;
use App\Models\Book;
use Illuminate\Http\Request;

class PublishedBooksSectionController extends Controller
{
    public function index()
    {
        $section = PublishedBooksSection::first();
        $books   = Book::where('is_active', true)
                       ->orderBy('sort_order')
                       ->get()
                       ->map(function ($book) {
                           return [
                               'id'           => $book->id,
                               'book_number'  => $book->book_number,
                               'title'        => $book->title,
                               'author_name'  => $book->author_name,
                               'author_age'   => $book->author_age,
                               'image_url'    => asset('book-images/' . $book->image),
                               'amazon_url'   => $book->amazon_url,
                               'flipkart_url' => $book->flipkart_url,
                           ];
                       });

        return response()->json([
            'badge'     => $section->badge,
            'title'     => $section->title,
            'btn_label' => $section->btn_label,
            'btn_url'   => $section->btn_url,
            'books'     => $books,
        ]);
    }
}