<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas</title>
</head>

<body>
    <h1>Bienvenido a la página de inicio</h1>
    <form action="peliculas/store" method="post">
        @csrf
        <div>
            <input type="number" name="isan" placeholder="ISAN de la película">
        </div>
        <div>
            <input type="text" name="titulo" placeholder="Título de la película">
        </div>
        <div>
            <input type="year" name="ano" placeholder="Año de la película">
        </div>
        <div>
            <input type="text" name="director" placeholder="Director de la película">
        </div>
        <div>
            <button type="submit">Agregar película</button>
        </div>
        <div>
            <a href="peliculas/list">Ver lista de películas</a>
        </div>
    </form>
</body>

</html>