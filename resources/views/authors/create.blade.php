@extends('layouts.app')

@section('content')
    <h2>Añadir autor</h2>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nacionalidad</label>
            <input type="text" name="nationality" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('authors.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection

