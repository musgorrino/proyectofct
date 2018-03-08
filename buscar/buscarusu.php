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
		<?php ver_buscar("usuarios","Usuarios","los usuarios","un usuario nuevo");?>
		<div id="formbuscar">
		<center>	<h3> Buscar informacion de lxs Usuario </h3>
			<table>
				<form action="buscarusu.php" method="post">
					<tr>
						<td><label for="nombre">Nombre </label></td>
						<td><input type="text" id="nombre" name="nombre" value="" placeholder="Nombre"></td>	
					</tr>	
					<tr>	
						<td><label for="tipo"> Tipo de Usuario</label></td>
						<td><input type="text"	name="tipo" id="tipo" value="" placeholder="¿Administrador o basico?"/></td>
					</tr>
						<td><input type="hidden" name="" value=""></td>
						<td><input type="submit" name="enviar" value="BUSCAR"/></td>
					</tr>
				</form>
			</table>
			</center>
		</div>
		<div>
	<center>	<?php 
$nombre=recoger($_POST['nombre']);
$tipo=recoger($_POST['tipo']);
$busqueda=array();
if($nombre==0){
$busqueda[]="nombre";
}
if($tipo==0){
$busqueda[]="tipo";
}
preparar_busqueda("usuarios",$busqueda);
?></center>

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
		<?php ver_buscar("usuarios","Usuarios","los usuarios","un usuario nuevo");?>
		<div id="formbuscar">
		<center>	<h3> Buscar informacion de lxs Usuario </h3>
			<table>
				<form action="buscarusu.php" method="post">
					<tr>
						<td><label for="nombre">Nombre </label></td>
						<td><input type="text" id="nombre" name="nombre" value="" placeholder="Nombre"></td>	
					</tr>	
					<tr>	
						<td><label for="tipo"> Tipo de Usuario</label></td>
						<td><input type="text"	name="tipo" id="tipo" value="" placeholder="¿Administrador o basico?"/></td>
					</tr>
						<td><input type="hidden" name="" value=""></td>
						<td><input type="submit" name="enviar" value="BUSCAR"/></td>
					</tr>
				</form>
			</table>
			</center>
		</div>
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