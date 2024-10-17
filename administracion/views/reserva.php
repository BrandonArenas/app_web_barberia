<?php
require_once "../models/Conexion.php";
$con = conexion();

$sql = "SELECT r.id, r.nombre, r.apellido, r.telefono, r.fecha, r.hora, c.corte, c.precio 
        FROM reservacion r
        INNER JOIN cortes c ON r.corte_id = c.id";
$resultados = mysqli_query($con, $sql);

// eliminar
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM reservacion WHERE id='$id'";
    $query = mysqli_query($con, $sql);

    header("Location: reserva.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Reservas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Listado de Reservas</h1>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>TELÉFONO</th>
                    <th>FECHA</th>
                    <th>HORA</th>
                    <th>CORTE</th>
                    <th>PRECIO</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($mostrar = mysqli_fetch_array($resultados)) : ?>
                    <tr>
                        <td><?php echo $mostrar['id'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><?php echo $mostrar['apellido'] ?></td>
                        <td><?php echo $mostrar['telefono'] ?></td>
                        <td><?php echo $mostrar['fecha'] ?></td>
                        <td><?php echo $mostrar['hora'] ?></td>
                        <td><?php echo $mostrar['corte'] ?></td>
                        <td><?php echo $mostrar['precio'] ?></td>
                        <td><a href="reserva.php?id=<?php echo $mostrar['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="../index.php" class="btn btn-primary">Regresar</a>
    </div>
</body>

</html>
