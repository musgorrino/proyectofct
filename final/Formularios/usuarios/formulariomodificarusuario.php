<html>
<head>
<h1>nuevo usuario</h1>
</head>
<body>
<form action="" method="post">
	<table>
		<tr>
			<td>
				<label for="nombre">Nombre: </label>
			</td>
			<td>
				<input type="text" name="nombre" value="<?php echo $Post['nombre']; ?>" id="nombre">
			</td>
		</tr>
		<tr>
			<td>
				<label for="password">password: </label>
			</td>
			<td>
				<input type="password" name="password" value="" id="password">
			</td>
		</tr>
</table>
		<input type="reset" id="limpiar" name="limpiar" value="Limpiar" />
		<input type="submit" id="enviar" name="enviar" value="Guardar" />
</form>
</body>
</html>