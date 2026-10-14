@extends('layouts.app')

@section('content')
    <h2>Autores</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Nacionalidad</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->nationality }}</td>
                </tr>
            @empty
                <tr><td colspan="3" class="text-center">No hay autores</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection