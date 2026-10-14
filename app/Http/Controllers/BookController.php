<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // with() carga la categoría y el autor de cada libro en la misma consulta
        $books = Book::with(['category', 'author'])->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        // Se necesitan para llenar los select del formulario
        $categories = Category::all();
        $authors = Author::all();
        return view('books.create', compact('categories', 'authors'));
    }

    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('books.index');
    }

    public function show(string $id)
    {
        // No se implementa, no se requiere mostrar solo un libro
    }

    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        $categories = Category::all();
        $authors = Author::all();
        return view('books.edit', compact('book', 'categories', 'authors'));
    }

    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return redirect()->route('books.index');
    }

    public function destroy(string $id)
    {
        Book::destroy($id);
        return redirect()->route('books.index');
    }
}