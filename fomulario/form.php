<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Formulario</title>
</head>
<body>
	<div class="contenedor-formulario">
		<div class="wrap">
			<form action="" class="formulario" name="formulario_registro" method="post">
				<div>
					<div class="input-group">
						<input type="text" id="nombre" name="nombre">
						<label class="label" for="nombre">Nombre Y Apellidos:</label>
					</div>
					<div class="input-group">
						<input type="text" id="correo" name="grupo">
						<label class="label" for="correo">Grupo:</label>
					</div>
					<div class="input-group">
						<input type="email" id="correo" name="correo">
						<label class="label" for="correo">Matricula:</label>
					</div>
					<div class="input-group">
						<input type="password" id="pass" name="pass">
						<label class="label" for="pass">Contraseña:</label>
					</div>
					<div class="input-group radio">
						<input type="radio" name="sexo" id="hombre" value="Hombre">
						<label for="hombre">Hombre</label>
						<input type="radio" name="sexo" id="mujer" value="Mujer">
						<label for="mujer">Mujer</label>
					</div>
					<div class="input-group">
						<input type="text" id="correo" name="comentario">
						<label class="label" for="correo">Comentarios:</label>
					</div>
					<div class="input-group checkbox">
						<input type="checkbox" name="terminos" id="terminos" value="true">
						<label for="terminos">Acepto los Terminos y Condiciones</label>
					</div>
						
					<input type="submit" id="btn-submit" value="Enviar">
				</div>
			</form>
			<?php
			include ("registrar.php");
			?>
		</div>
	</div>
	<script src="js/formulario.js"></script>
</body>
</html>