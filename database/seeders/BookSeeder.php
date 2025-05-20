<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create(['title' => '1984', 'author' => 'George Orwell']);
        Book::create(['title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien']);
    }
}
