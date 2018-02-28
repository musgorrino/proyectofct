<?php
include "funciones.php";
?>
<html>
<head>
<h1>nueva entrada</h1>
</head>
<body>
<form action="" method="post">
	<table>
		<tr>
			<td>
				<label for="grupo">Grupo: </label>
			</td>
			<td>
				<select id="grupo">
				<?php
				generar_select('grupos','abreviatura')
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<label for="alumnos">Alumno: </label>
			</td>
			<td>
				<select id="alumnos">
				<?php
				generar_select('alumnos','nombre')
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<label for="Curso">curso: </label>
			</td>
			<td>
				<input type="text" name="curso" value="" id="curso">
			</td>
		</tr>
</table>
<input type="submit" value="crear">
</form>
</body>
</html>