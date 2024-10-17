<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0aead859a1.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="vista/css/estilos.css">
    <title>Proyecto Barberia</title>
</head>

<body>
    <div class="padre">
        <header class="header">
            <div class="menu">
                <div class="logo">
                    <a href="#">Barber Shop</a>
                </div>
                <nav class="nav">
                    <a href="#"><i class="fa-solid fa-house"></i><span class="off">Inicio</span></a>
                    <a href="#ser"><i class="fa-solid fa-comments"></i><span class="off">Servicios</span></a>
                    <a href="#"><i class="fa-solid fa-envelope"></i><span class="off">Contacto</span></a>
                    <a href="#"><i class="fa-solid fa-users"></i><span class="off">Nosotros</span></a>
                    <a href="vista/login.php">Admin</a>
                </nav>
                <div class="social">
                    <div><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
                    <div><a href="#"><i class="fa-brands fa-square-whatsapp"></i></a></div>
                </div>
            </div>
            <div class="texto-principal">
                <h1> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Sed aperiam voluptatum quos illum doloremque suscipit perferendis eligendi quasi a eius iusto autem,
                    quisquam nemo quidem deserunt quod officiis. Dolores, esse.</h1>
            </div>
        </header>
        <!-- Carrusel de imagenes -->
        <section class="contenedor">
            <div id="carouselExample" class="carousel slide w-25">
                <div class=" carousel-inner text-center">
                    <?php
                    $contador = 2;
                    foreach ($result as $datos) : ?>
                        <?php
                        if ($contador == 2) { ?>
                            <div class="carousel-item active">
                                <p class="corte"><?php echo $datos['corte'] ?></p>
                                <p class="precio"> <?php echo $datos['precio'] ?> </p>
                                <img src="barberia/<?php echo $datos['imagen'] ?>" class="d-block w-100">
                                <a href="vista/formulario.php?id=<?php echo $datos['id'] ?>">Reservar</a>
                            </div>
                        <?php
                            $contador = 1;
                        } else { ?>
                            <div class="carousel-item">
                                <p class="corte"><?php echo $datos['corte'] ?></p>
                                <p class="precio"> <?php echo $datos['precio'] ?> </p>
                                <img src="barberia/<?php echo $datos['imagen'] ?>" class="d-block w-100">
                                <a href="vista/formulario.php?id=<?php echo $datos['id'] ?>">Reservar</a>
                            </div>
                        <?php
                        }
                        ?>
                    <?php endforeach; ?>
                </div>
                <!-- Controles -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- Footer -->
        <footer class="footer">
            <div class="contacto">
                <h3>Información de Contacto</h3>
                <p>
                    Teléfono: 999 999 999</p>
                <p>
                    Correo Electrónico: info@barberia.com </p>
                <p>Dirección: Calle Principal 123, Ciudad, País </p>
            </div>
            <div class="horario">
                <h3>Horario de atencion</h3>
                <ul>
                    <li>Lunes a Viernes: 10:00 AM - 9:00PM</li>
                    <li>Sabado: 9:00 AM - 9:00 PM</li>
                    <li>Domingo: 10:00 AM - 8:00 PM</li>
                </ul>
            </div>
            <div class="enlaces-rapidos">
                <h3>Enlaces Rapidos</h3>
                <ul>
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Servicios</a></li>
                    <li><a href="">Reservar</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
