<?php 
include("../../funciones/funciones.php");

	cabecera("Historial de alumnos.","estilos.css");
?>
<?php 
coger_tablas('historial_alumnos');
?>
<form action="" method="post">
<table>
		<tr>
			<td>
				<label for="codigo">codigo: </label>
			</td>
			<td>
				<select name="codigo" id="codigo">
				<?php
				generar_select('historial_alumnos','codigo')
				?>
				</select>
			</td>
			<td>
			<input type="submit" value="modificar" name="enviar" />
			</td>
			<td>
			<input type="submit" value="borrar" name="enviar" />
			</td>
		</tr>
</table>
</form>
<button><a href="insertar_historial.php">nuevo</a></button>
</body>
</html>
