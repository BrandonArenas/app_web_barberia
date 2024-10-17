<?php
require_once "../models/Conexion.php";
$con = conexion();

$sql = "SELECT * FROM cortes";
$resultados = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous">
    <title>Cortes</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            color: #343a40;
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 30px;
        }

        .form-row {
            margin-bottom: 20px;
        }

        .table {
            margin-top: 30px;
        }

        .table thead th {
            background-color: #343a40;
            color: #fff;
        }

        .table tbody td {
            vertical-align: middle;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .btn-container .btn {
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>CORTES</h1>
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="../controllers/insertar.php">
                    <div class="form-row">
                        <div class="col-md-4">
                            <input type="text" name="corte" class="form-control" placeholder="Nombre del corte" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="precio" class="form-control" placeholder="Precio" required>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="imagen" required>
                                <label class="custom-file-label" for="customFile">Seleccionar imagen</label>
                            </div>
                        </div>
                    </div>
                    <div class="btn-container">
                        <input type="submit" value="Guardar" name="btnagregar" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr align="center">
                    <th>ID</th>
                    <th>CORTE</th>
                    <th>PRECIO</th>
                    <th>IMAGEN</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($mostrar = mysqli_fetch_array($resultados)) : ?>
                    <tr>
                        <td><?php echo $mostrar['id'] ?></td>
                        <td><?php echo $mostrar['corte'] ?></td>
                        <td>$<?php echo $mostrar['precio'] ?></td>
                        <td align="center">
                            <img src="../<?php echo $mostrar['imagen']; ?>" alt="Imagen del corte" width="100">
                        </td>
                        <td align="center">
                            <a href="actualizar.php?id=<?php echo $mostrar['id'] ?>" class="btn btn-sm btn-primary">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="../controllers/eliminar.php?id=<?php echo $mostrar['id'] ?>" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</body>

</html>
