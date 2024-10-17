<?php
require_once "../models/Conexion.php";
$con = conexion();

$id = $_POST['id'];
$corte = $_POST['corte'];
$precio = $_POST['precio'];
$img = $_FILES['imagen'];
$name = $img['name'];
$tmpname = $img['tmp_name'];
$fecha = date("YmdHis");
$foto = $fecha . ".jpg";
$destino = "../" . $foto;

if (move_uploaded_file($tmpname, $destino)) {
	$mostrar = mysqli_query($con, "UPDATE cortes SET corte='$corte', precio=$precio,imagen='$foto' WHERE id='$id'");
	if ($mostrar) {
		header('Location: ../views/inicio.php');
	}
}
