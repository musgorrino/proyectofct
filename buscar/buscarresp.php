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
		<center><?php ver_buscar("responsables","Responsables","los responsales","un responsable nuevo");?></center>
		<div id="formbuscar">
			<h3> Buscar informacion de los Responsables </h3>
			<table>
				<form action="buscarresp.php" method="post">
					<tr>
						<td><label for="nombre">Nombre </label></td>
						<td><input type="text" id="nombre" name="nombre" value="<?php echo $_POST['nombre']; ?>" placeholder="Nombre"></td>	
					</tr>	
					<tr>	
						<td><label for="empresa">Empresa</label></td>
						<td><input type="text"	name="empresa" id="empresa" value="<?php echo $_POST['empresa']; ?>" placeholder="Inserte nombre de la empresa"/></td>
					</tr>
						<td><input type="hidden" name="" value=""></td>
						
						<td><input type="submit" name="enviar" value="BUSCAR"/>
						<td><input type="su" name="Volver al menu" a href="../Web/buscador.php"></td>	
					</tr>
				</form>
			</table>
		</div>
		<div>
		<?php 
include("../../funciones/funciones.php");

$nombre=recoger($_Post['nombre']);
$empresa=recoger($_Post['empresa']);
$busqueda=array();
if($nombre==0){
$busqueda[]="nombre";
}
if($empresa==0){
$busqueda[]="empresa";
}
preparar_busqueda("responsable",$busqueda);
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
		<?php ver_buscar("responsables","Responsables","los responsales","un responsable nuevo");?>
		<div id="formbuscar">
			<h3> Buscar informacion de los Responsables </h3>
			<table>
				<form action="buscarresp.php" method="post">
					<tr>
						<td><label for="nombre">Nombre </label></td>
						<td><input type="text" id="nombre" name="nombre" value="" placeholder="Nombre"></td>	
					</tr>	
					<tr>	
						<td><label for="empresa">Empresa</label></td>
						<td><input type="text"	name="empresa" id="empresa" value="" placeholder="Inserte nombre de la empresa"/></td>
					</tr>
						<td><input type="hidden" name="" value=""></td>
						
						<td><input type="submit" name="enviar" value="BUSCAR"/>
						<td><input type="su" name="Volver al menu" a href="../Web/buscador.php"></td>	
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