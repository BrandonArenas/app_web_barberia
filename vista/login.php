<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Iniciar Sesión</title>
</head>

<body>
	<div class="abs-center">
		<h2>Iniciar sesión</h2>
		<form method="POST" action="../controlador/UsuarioControl.php?accion=login">
			<div class="mb-3">
				<label for="usuario" class="form-label">Usuario</label>
				<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario">
			</div>
			<div class="mb-3">
				<label for="passwordd" class="form-label">Contraseña</label>
				<input type="password" name="passwordd" id="passwordd" class="form-control" placeholder="Contraseña">
			</div>
			<button type="submit" class="btn btn-primary">Iniciar Sesión</button>
		</form>
		<?php if (isset($mensaje)) : ?>
			<p><?php echo $mensaje; ?></p>
		<?php endif; ?>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
