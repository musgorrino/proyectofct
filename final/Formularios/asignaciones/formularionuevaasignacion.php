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
				<label for="curso">Curso: </label>
			</td>
			<td>
				<input type="text" name="curso" value="" id="curso">
			</td>
		</tr>
		<tr>
			<td>
				<label for="horario">Horario: </label>
			</td>
			<td>
				<input type="text" name="horario" value="" id="horario">
			</td>
		</tr>
		<tr>
			<td>
				<label for="observaciones">Observaciones: </label>
			</td>
			<td>
				<textarea name="observaciones" id="observaciones"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<label for="trabajodesempenado">trabajo desempeñado: </label>
			</td>
			<td>
				<textarea name="trabajodesempenado" id="trabajodesempenado"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				Contratacion del alumno:
			</td>
			<td>
				
					<label for="contratacionsi">si </label>
					<input type="radio" name="contratacionsi" value="si" id="contratacionsi">
				
					<label for="contratacionno">no </label>
					<input type="radio" name="contratacionno" value="no" id="contratacionno">
				
		</td>
		</tr>
</table>
		<input type="reset" id="limpiar" name="limpiar" value="Limpiar" />
		<input type="submit" id="enviar" name="enviar" value="Crear" />
</form>
</body>
</html>