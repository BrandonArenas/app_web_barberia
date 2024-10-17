<?php
require_once '../modelo/Usuario.php';

class UsuarioControlador
{
	private $usuario;

	function __construct()
	{
		$this->usuario = new UsuarioBD();
	}

	function login()
	{
		if (isset($_POST['usuario']) && isset($_POST['passwordd'])) {
			$usuario = $_POST['usuario'];
			$passwordd = $_POST['passwordd'];

			if ($this->usuario->verificarUsuario($usuario, $passwordd)) {
				header('Location: ../administracion/index.php');
				exit();
			} else {
				$mensaje = "Usuario o contraseña incorrecto";
				require_once '../vista/login.php';
			}
		}
	}
}

$controlador = new UsuarioControlador();
$controlador->login();
