<?php
class ConexionBD{
    private $cnx;

    function __construct(){
        $this->cnx = new mysqli("localhost","root","","dbbarberia");
    }
    function listar(){
        $query = "SELECT * FROM cortes";
        $result = $this->cnx->query($query);
        return $result;
    }
}
?>