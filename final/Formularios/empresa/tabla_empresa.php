<?php 
include("../../funciones/funciones.php");

	cabecera("Familias profesionales.","estilos.css");
?>
<?php 
coger_tablas('familias_profesionales');
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
				generar_select('familias_profesionales','codigo')
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
<button><a href="insertar_empresa.php">nuevo</a></button>
</body>
</html>
