<?php 
include("funciones.php");

	cabecera("Modificar asignacion.","estilos.css");
?>
<?php 
coger_tablas('alumnos');
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
				generar_select('alumnos','codigo')
				?>
				</select>
			</td>
			<td>
			<input type="submit" value="modificar" name="modificar" />
			</td>
			<td>
			<input type="submit" value="borrar" name="borrar" />
			</td>
		</tr>
</table>
</form>
<button><a href="">nuevo</a></button>
</body>
</html>
