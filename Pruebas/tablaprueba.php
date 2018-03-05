<?php 
include("funciones.php");

	cabecera("Modificar asignacion.","estilos.css");
?>
<?php 
coger_tablas('alumnos');
?>
<form action="" method="post">
<table>
		
<tr><td><label for="codigo">Introduce el nombre del alumno que deseas modificar:</label></td>
<td>
				<select name="codigo" id="codigo">
				<?php
				generar_select('alumnos','codigo')
				?>
				</select>
</td>
</tr>

		<tr>
			<td>
			<input type="submit" value="modificar" name="enviar" />
			</td>
			<td>
			<input type="submit" value="borrar" name="enviar" />
			</td>
		</tr>
</table>
</form>
<button><a href="">nuevo</a></button>
</body>
</html>
