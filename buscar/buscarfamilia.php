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
		<?php ver_buscar("familia","Familias","las familias","una familia nueva");?>
		<div id="formbuscar">
			<h3> Buscar informacion de las Familias Profesionales </h3>
			<table>
				<form action="buscarfamilia.php" method="post">
					<tr>
						
						<td><label  for="nombre">Nombre </label></td>
						<td><input type="text" name="nombre"  id="nombre" value="<?php echo $_POST['nombre']; ?>" placeholder="Nombre"></td>
					
						
					</tr>	
					<tr>	
						<td><label  for="coordinador">Coordinador</label></td>
						<td><input type="text"	name="coordinador" id="coordinador" value="<?php echo $_POST['coordinador']; ?>" placeholder="Inserte coordinador"/></td>
					</tr>
							
							
							<td><input type="hidden" name="" value=""></td>
							<td><input type="submit" name="enviar" value="BUSCAR"/></td>
					</tr>
				</form>
			</table>
		</div>
		<div>
		<?php 

$nombre=recoger($_POST['nombre']);
$coordinador=recoger($_POST['coordinador']);
$busqueda=array();
if($nombre==0){
$busqueda[]="nombre";
}
if($coordinador==0){
$busqueda[]="coordinador";
}
preparar_busqueda("familia",$busqueda);
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
		<?php ver_buscar("familia","Familias","las familias","una familia nueva");?>
		<div id="formbuscar">
			<h3> Buscar informacion de las Familias Profesionales </h3>
			<table>
				<form action="buscarfamilia.php" method="post">
					<tr>
						
						<td><label  for="nombre">Nombre </label></td>
						<td><input type="text" name="nombre"  id="nombre" value="" placeholder="Nombre"></td>
					
						
					</tr>	
					<tr>	
						<td><label  for="coordinador">Coordinador</label></td>
						<td><input type="text"	name="coordinador" id="coordinador" value="" placeholder="Inserte coordinador"/></td>
					</tr>
							
							
							<td><input type="hidden" name="" value=""></td>
							<td><input type="submit" name="enviar" value="BUSCAR"/></td>
					</tr>
				</form>
			</table>
		</div>
	</div>
</div>
<?php
}
?>

</body>
</html>