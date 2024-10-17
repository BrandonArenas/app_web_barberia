<?php
require_once "../models/Conexion.php";
$con = conexion();

$id = $_GET['id'];

$sql = "DELETE FROM cortes WHERE id='$id'";
$resultados = mysqli_query($con, $sql);

if ($resultados) {
	header('Location: ../views/inicio.php');
}
