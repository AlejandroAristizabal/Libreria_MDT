<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Librería MDT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Librería MDT</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('categories.index') }}">Categorías</a>
                <a class="nav-link" href="{{ route('authors.index') }}">Autores</a>
                <a class="nav-link" href="{{ route('books.index') }}">Libros</a>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        @yield('content')
    </div>
</body>
</html>