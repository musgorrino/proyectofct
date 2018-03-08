<?php 
include("../funciones.php");
 
cabecera("Gestion FCT", "../Web/estilo.css");
if(isset($_POST['enviar'])){
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
		<?php ver_buscar("profesores","Profesores","los profesores","un profesor nuevo");?>
		<div id="formbuscar">
			<h3> Buscar informacion de lxs Profesrxs </h3>
			<table>
				<form action="buscarprof.php" method="post">
					<tr>
						<td><label for="nombre">Nombre </label></td>
						<td><input type="text" id="nombre" name="nombre" value="<?php echo $_POST['nombre']; ?>" placeholder="Nombre"></td>	
					</tr>	
					<tr>	
						<td><label for="codigointerprof">Codigo Interno Profesores</label></td>
						<td><input type="text"	name="codigointerprof" id="codigointerprof" value="<?php echo $_POST['codigointerprof']; ?>" placeholder="Inserte codigo"/></td>
					</tr>
						<td><input type="hidden" name="" value=""></td>
						<td><input type="submit" name="enviar" value="BUSCAR"/>
					</tr>
				</form>
			</table>
		</div>
		<div>
		<?php 
$codigointerprof=recoger($_Post['codigointerprof']);
$nombre=recoger($_Post['nombre']);
$busqueda=array();
if($codigointerprof==0){
$busqueda[]="codigointerprof";
}
if($nombre==0){
$busqueda[]="nombre";
}
preparar_busqueda("profesores",$busqueda);
?>

		</div>
	</div>
		
	<div id="pie">
		<?php ver_pie(); ?>
	</div>
</div>
<?php
}
else {
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
		<?php ver_buscar("profesores","Profesores","los profesores","un profesor nuevo");?>
		<div id="formbuscar">
			<h3> Buscar informacion de lxs Profesrxs </h3>
			<table>
				<form action="buscarprof.php" method="post">
					<tr>
						<td><label for="nombre">Nombre </label></td>
						<td><input type="text" id="nombre" name="nombre" value="" placeholder="Nombre"></td>	
					</tr>	
					<tr>	
						<td><label for="codigointerprof">Codigo Interno Profesores</label></td>
						<td><input type="text"	name="codigointerprof" id="codigointerprof" value="" placeholder="Inserte codigo"/></td>
					</tr>
						<td><input type="hidden" name="" value=""></td>
						<td><input type="submit" name="enviar" value="BUSCAR"/>
					</tr>
				</form>
			</table>
		</div>
	</div>
		
	<div id="pie">
		<?php ver_pie(); ?>
	</div>
</div>
<?php
}
?>
</body>
</html>