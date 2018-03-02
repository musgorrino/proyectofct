<?php 
include("../../funciones/funciones.php");

	cabecera("Asignaciones.","estilos.css");
?>
<?php 
coger_tablas('asignaciones');
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
				generar_select('asignaciones','codigo')
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
<button><a href="insertar_asignacion.php">nuevo</a></button>
</body>
</html>
