<?php
include "funciones.php";
?>
<html>
<head>
<h1>nuevo responsable</h1>
</head>
<body>
<form action="" method="post">
	<table>
		<tr>
			<td>
				<label for="nombre">Nombre: </label>
			</td>
			<td>
				<input type="text" name="nombre" value="" id="nombre">
			</td>
		</tr>
		<tr>
			<td>
				<label for="empresa">Empresa: </label>
			</td>
			<td>
				<select id="empresa">
				<?php
				generar_select('empresas','nombre')
				?>
				</select>
			</td>
		</tr>
</table>
<input type="submit" value="crear">
</form>
</body>
</html>