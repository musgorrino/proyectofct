<?php 
include("../funciones.php");
include("../funciones_insertar.php");
 
cabecera("Gestion FCT", "estilo.css");
?>
<div id="contenedor">
	<div id="cabecera">
		<div id="login">
		</div>
		<div id="logo">
			<?php ver_logo("../imagenes/logo.png");?>
		</div>
		<div id="menu">
			<?php ver_menu();?>				
		</div>
	</div>
	
	<div id="contenido">
	<?
	 conexion_bbdd(){
		$conexion=conectar("mydb"); 
 
		$codigo=$_POST['codigo'];
 
		$q = "select * from profesores where codigo ='$codigo'";
		$resultado = mysql_query($q,$conexion) or die(mysql_error());
		$total= mysql_num_rows($resultado);
 
	if ($total>0){
		$fila = mysql_fetch_assoc($resultado);		
	}
		 modificar_profesores();
		 
	mysql_free_result($resultado);
	mysql_close($conexion);
	}
		 ?>
	</div>	
	<div id="pie">
		<?php ver_pie(); ?>
	</div>
</div>

</body>
</html>