<?php
class UsuarioBD {
    private $cnx;

    function __construct() {
        $this->cnx = new mysqli("localhost", "root", "", "dbbarberia");

        if ($this->cnx->connect_error) {
            die("Error de conexión a la base de datos");
        }
    }

    function verificarUsuario($usuario, $passwordd) {
        $query = "SELECT * FROM usuario WHERE usuario = '$usuario' and passwordd = '$passwordd'";
        $resultado = $this->cnx->query($query);

        if ($resultado && $resultado->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}
?>
