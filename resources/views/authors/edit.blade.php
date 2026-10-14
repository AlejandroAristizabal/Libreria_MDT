
@extends('layouts.app')

@section('content')
    <h2>Editar autor</h2>
    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" value="{{ $author->name }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nacionalidad</label>
            <input type="text" name="nationality" class="form-control" value="{{ $author->nationality }}">
        </div>
        <button type="submit" class="btn btn-warning">Actualizar</button>
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection

