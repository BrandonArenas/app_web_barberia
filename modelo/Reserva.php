<?php
class ReservaBD {
    private $cnx;

    function __construct() {
        $this->cnx = new mysqli("localhost", "root", "", "dbbarberia");

        if ($this->cnx->connect_error) {
            die("Error de conexión a la base de datos");
        }
    }

    function guardarReserva($nombre, $apellido, $telefono, $fecha, $hora, $corteId) {
        $query = "INSERT INTO reservacion (nombre, apellido, telefono, fecha, hora, corte_id) 
        VALUES ('$nombre', '$apellido', '$telefono', '$fecha', '$hora', $corteId)";
        $resultado = $this->cnx->query($query);
        return $resultado;
    }
}
