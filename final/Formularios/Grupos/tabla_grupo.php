<?php 
include("../../funciones/funciones.php");

	cabecera("Grupos.","estilos.css");
?>
<?php 
coger_tablas('grupos');
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
				generar_select('grupos','codigo')
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
<button><a href="insertar_grupo.php">nuevo</a></button>
</body>
</html>
