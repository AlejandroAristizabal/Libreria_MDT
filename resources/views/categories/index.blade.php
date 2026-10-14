@extends('layouts.app')

@section('content')
    <h2>Categorías</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                </tr>
            @empty
                <tr><td colspan="3" class="text-center">No hay categorías</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection