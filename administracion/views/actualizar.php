<?php
require_once "../models/Conexion.php";

$con = conexion();

$id = $_GET['id'];

$sql = "SELECT * FROM cortes WHERE id = '$id'";
$resultados = mysqli_query($con, $sql);
$mostrar = mysqli_fetch_array($resultados);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-control-file {
            display: block;
            width: 100%;
        }

        .btn-primary {
            width: 100%;
        }
    </style>
    <title>Editar</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">EDITAR CORTES</h1>
        <form method="POST" enctype="multipart/form-data" action="../controllers/modificar.php">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $mostrar['id'] ?>">
                <label for="corte">CORTES:</label>
                <input type="text" name="corte" id="corte" value="<?php echo $mostrar['corte'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="precio">PRECIO:</label>
                <input type="text" name="precio" id="precio" value="<?php echo $mostrar['precio'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="imagen">IMAGEN:</label>
                <input type="file" name="imagen" id="imagen" class="form-control-file">
            </div>
            <div class="form-group">
                <input type="submit" value="Guardar" class="btn btn-primary">
            </div>
        </form>
    </div>

</body>

</html>
