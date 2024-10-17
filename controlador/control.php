<?php
require_once('modelo/consultas.php');

class Controlador{
    private $conexionbd;

    function __construct(){
        $this->conexionbd = new ConexionBD();
    }
    
    function listar(){
        $result = $this->conexionbd->listar();
        require_once ('vista/cortes.php');     
    }
}
?>
