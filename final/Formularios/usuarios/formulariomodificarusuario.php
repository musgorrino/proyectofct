<?php 
include("../../funciones/funciones.php");

	cabecera("Modificar usuario.","estilos.css");

	$conexion=Conectarse("mydb"); 
 
		$codigo=$_POST['codigo'];
 
			$q = "select * from usuarios where codigo ='$codigo'";
			$resultado = mysql_query($q,$conexion) or die(mysql_error());
		$total= mysql_num_rows($resultado);
 
	if ($total>0){
		$fila = mysql_fetch_assoc($resultado);
?>
<form action="" method="post">
	<table>
		<tr>
			<td>
				<label for="nombre">Nombre: </label>
			</td>
			<td>
				<input type="text" name="nombre" value="<?php echo $Post['nombre']; ?>" id="nombre">
			</td>
		</tr>
		<tr>
			<td>
				<label for="password">password: </label>
			</td>
			<td>
				<input type="password" name="password" value="" id="password">
			</td>
		</tr>
</table>
		<input type="reset" id="limpiar" name="limpiar" value="Limpiar" />
		<input type="submit" id="enviar" name="enviar" value="Guardar" />
</form>
<?php
}
	mysql_free_result($resultado);
		mysql_close($conexion);
?>

</body>
</html>