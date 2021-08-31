<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="utf-8">
	<title> </title>
	<script src="http://code.jquery.com/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="datos.php">
</head>

<body>
	
	<center><br><br><br>
		<fieldset > 
	  <div>
		<form id="Formulario" method="POST">
			<br>
			<label for="Nombre">Nombre:
				<input type="text" id="Nombre" name="Nombre">
		</label>
				<label for="Apellido">Apellido:
		<input type="text" id="Apellido" name="Apellido">
				</label>

				<button type="button" id="boton">Enviar</button>

		</form>
		<br>
	</div>
	<div id="respuesta"></div></center></fieldset>

</body>
<script src="enviar.js">
	
</script>
</html>