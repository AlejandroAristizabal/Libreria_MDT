@extends('layouts.app')

@section('content')
    <h2>Libros</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>ISBN</th>
                <th>Año</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th>Autor</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->isbn }}</td>
                    <td>{{ $book->publication_year }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $book->category->name }}</td>
                    <td>{{ $book->author->name }}</td>
                </tr>
            @empty
                <tr><td colspan="7" class="text-center">No hay libros</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection