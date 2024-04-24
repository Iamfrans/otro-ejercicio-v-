<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página de Videojuegos</title>
    <!-- Agregar Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo */
            color: #343a40; /* Color del texto */
        }
        .jumbotron {
            background-color: #212529; /* Color de fondo del jumbotron */
            color: #ffffff; /* Color del texto del jumbotron */
        }
        .card {
            background-color: #ffffff; /* Color de fondo de las tarjetas */
            border: none; /* Sin borde */
        }
        .card-title {
            color: #343a40; /* Color del título de la tarjeta */
        }
        .card-text {
            color: #6c757d; /* Color del texto de la tarjeta */
        }
        .btn-primary {
            background-color: #007bff; /* Color de fondo del botón */
            border-color: #007bff; /* Color del borde del botón */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Cambio de color al pasar el ratón sobre el botón */
            border-color: #0056b3; /* Cambio de color del borde al pasar el ratón sobre el botón */
        }
        .navbar {
            background-color: #343a40; /* Color de fondo de la barra de navegación */
        }
        .navbar-brand {
            color: #ffffff; /* Color del texto del enlace de la barra de navegación */
        }
        .navbar-brand:hover {
            color: #f8f9fa; /* Cambio de color al pasar el ratón sobre el enlace de la barra de navegación */
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Página de Videojuegos</a>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1 class="display-4">¡Bienvenido a tu Página de Videojuegos Favorita!</h1>
        <p class="lead">Descubre las últimas noticias, reseñas y novedades sobre tus videojuegos preferidos.</p>
        <hr class="my-4">
        <p>Explora nuestra colección y sumérgete en el mundo de los videojuegos.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Explorar</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Placeholder">
                    <div class="card-body">
                        <h5 class="card-title">Últimas Novedades</h5>
                        <p class="card-text">Descubre los últimos lanzamientos y noticias del mundo de los videojuegos.</p>
                        <a href="#" class="btn btn-primary">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Placeholder">
                    <div class="card-body">
                        <h5 class="card-title">Reseñas</h5>
                        <p class="card-text">Lee nuestras reseñas sobre los juegos más populares y descubre qué opinamos.</p>
                        <a href="#" class="btn btn-primary">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Placeholder">
                    <div class="card-body">
                        <h5 class="card-title">Gameplay</h5>
                        <p class="card-text">Mira los videos de gameplay y descubre cómo jugar los últimos lanzamientos.</p>
                        <a href="#" class="btn btn-primary">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agregar Bootstrap JS (opcional, solo si necesitas componentes de JavaScript) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
