<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class LibrarySeeder extends Seeder
{
    public function run(): void
    {
        $novela = Category::create(['name' => 'Novela', 'description' => 'Obras de ficción narrativa']);
        $cuento = Category::create(['name' => 'Cuento', 'description' => 'Narraciones breves']);
        $ciencia = Category::create(['name' => 'Ciencia', 'description' => 'Divulgación científica']);

        $garcia = Author::create(['name' => 'Gabriel García Márquez', 'nationality' => 'Colombiana']);
        $borges = Author::create(['name' => 'Jorge Luis Borges', 'nationality' => 'Argentina']);
        $sagan = Author::create(['name' => 'Carl Sagan', 'nationality' => 'Estadounidense']);

        Book::create(['title' => 'Cien años de soledad', 'isbn' => '9780307474728', 'publication_year' => 1967, 'price' => 45000, 'category_id' => $novela->id, 'author_id' => $garcia->id]);
        Book::create(['title' => 'El Aleph', 'isbn' => '9788420633121', 'publication_year' => 1949, 'price' => 32000, 'category_id' => $cuento->id, 'author_id' => $borges->id]);
        Book::create(['title' => 'Cosmos', 'isbn' => '9780345539434', 'publication_year' => 1980, 'price' => 52000, 'category_id' => $ciencia->id, 'author_id' => $sagan->id]);
    }
}