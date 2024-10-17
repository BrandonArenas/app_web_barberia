<?php
require_once "../models/Conexion.php";
$con = conexion();

if (isset($_POST)) {
	if (!empty($_POST)) {

		//prueba
		$nombre = $_POST['corte'];
		$precio = $_POST['precio'];
		$img = $_FILES['imagen'];
		$name = $img['name'];
		$tmpname = $img['tmp_name'];
		$foto = "../vista/img/" . $name;
		$destino = "../../vista/img/" . $name;

		// Insertar el corte en la base de datos
		$mostrar = mysqli_query($con, "INSERT INTO cortes (corte, precio,imagen) VALUES ('$nombre', $precio, '$foto')");
		if ($mostrar) {
			if (move_uploaded_file($tmpname, $destino)) {
				header('Location: ../views/inicio.php');
			}
		}
	} 
}
