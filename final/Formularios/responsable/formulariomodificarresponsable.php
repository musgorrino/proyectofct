<?php 
include("../../funciones/funciones.php");

	cabecera("Modificar responsable.","estilos.css");

	$conexion=Conectarse("mydb"); 
 
		$codigo=$_POST['codigo'];
 
			$q = "select * from responsable where codigo ='$codigo'";
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