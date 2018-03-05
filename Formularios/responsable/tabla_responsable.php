<?php 
include("../../funciones/funciones.php");

	cabecera("Responsable.","estilos.css");
?>
<?php 
coger_tablas('responsable');
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
				generar_select('responsable','codigo')
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
<button><a href="insertar_responsable.php">nuevo</a></button>
</body>
</html>
