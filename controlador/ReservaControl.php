<?php
require_once '../modelo/Reserva.php';

class ReservaControlador {
	private $reserva;

	function __construct() {
		$this->reserva = new ReservaBD();
	}

	public function guardaReserva() {
		if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['telefono']) && isset($_POST['fecha']) && isset($_POST['hora'])) {
			$corteId = $_POST['id'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$telefono = $_POST['telefono'];
			$fecha = $_POST['fecha'];
			$hora = $_POST['hora'];

			$resultado = $this->reserva->guardarReserva($nombre, $apellido, $telefono, $fecha, $hora, $corteId);

			if ($resultado) {
				$mensaje = "Su reserva se realizo con exito";
				header('Location: ../vista/formulario.php?id=' . $corteId . '&mensaje=' . urlencode($mensaje));
				exit;
			}else {
				$mensaje = "Hubo un error al realizar su reserva";
                header('Location: ../vista/formulario.php?id=' . $corteId,$nombre, $apellido, $telefono, $fecha, $hora);
				exit;			
			}
		}
	}
	
}

$controlador = new ReservaControlador();
$controlador->guardaReserva();
?>
