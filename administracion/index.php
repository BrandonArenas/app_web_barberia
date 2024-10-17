<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Barber Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-image: url("img/fondo_barberia.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .jumbotron {
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            text-align: center;
            padding: 40px;
            margin-bottom: 0;
        }

        .jumbotron h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .btn-container .btn {
            margin: 10px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="jumbotron">
        <h1 class="display-4">Bienvenido a Barber Shop</h1>
        <p class="lead">¿Qué te gustaría hacer hoy?</p>
        <div class="btn-container">
            <a href="views/inicio.php" class="btn btn-primary btn-lg">Ver Cortes</a>
            <a href="views/reserva.php" class="btn btn-primary btn-lg">Reservar Cita</a>
        </div>
    </div>
</body>

</html>
