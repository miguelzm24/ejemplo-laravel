<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | Películas</title>
</head>

<body>
    <h1>Películas</h1>
    
    <ul>
        @foreach ($peliculas as $pelicula)
        <li>
        <a href="/peliculas/show/{{ $pelicula->id }}">{{ $pelicula->titulo }}, {{ $pelicula->ano }}</a>
        </li>
        @endforeach
    </ul>
</body>

</html>