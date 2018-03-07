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
		<?php ver_buscar("empresas","Empresas","las empresas","una empresa nueva");?>
		<div id="formbuscar">
			<h3> Buscar informacion de las empresas </h3>
			<table>
				<form action="buscarempre.php" method="post">
					<tr>
						
						<td><label for="nombre">Nombre </label></td>
						<td><input type="text" name="nombre" id=nombre=  value="<?php echo $_POST['nombre']; ?>" placeholder="Nombre"></td>
					
						<td><label for="titularidad">Titularidad</label></td>
						<td>	<input type="text"	name="titularidad" id="titularidad" value="<?php echo $_POST['titularidad']; ?>"  placeholder="¿Publica o Privada?"/></td>
					</tr>	
					<tr>	
						<td><label for="Poblacion"> Población</label></td>
						<td><input type="text" name="Poblacion" id="Poblacion"  value="<?php echo $_POST['Poblacion']; ?>" placeholder="Inserte población"/></td>
						
						<td><label for="provincia"> Provincia </label></td>
						<td><input type="text" name="provincia" id= "provinciaa" value="<?php echo $_POST['provincia']; ?>" placeholder="Inserta Provincia"/></td>
					</tr>
							
							<td><label for="convenio"> Convenio </label></td>
							<td><input type="text" name="convenio" id="convenio" placeholder="¿Si o No?"/></td>
							<td><input type="hidden" name="" value=""></td>
							<td><input type="submit" name="enviar" value="BUSCAR"/>
					</tr>
				</form>
			</table>
		</div>
		<div>
		<?php 

$nombre=recoger($_Post['nombre']);
$titularidad=recoger($_Post['titularidad']);
$poblacion=recoger($_Post['poblacion']);
$provincia=recoger($_Post['provincia']);
$convenio=recoger($_Post['convenio']);
$busqueda=array();
if($nombre==0){
$busqueda[]="nombre";
}
if($titularidad==0){
$busqueda[]="titularidad";
}
if($poblacion==0){
$busqueda[]="poblacion";
}
if($provincia==0){
$busqueda[]="provincia";
}
if($convenio==0){
$busqueda[]="convenio";
}
preparar_busqueda("empresas",$busqueda);
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
		<?php ver_buscar("empresas","Empresas","las empresas","una empresa nueva");?>
		<div id="formbuscar">
			<h3> Buscar informacion de las empresas </h3>
			<table>
				<form action="buscarempre.php" method="post">
					<tr>
						
						<td><label for="nombre">Nombre </label></td>
						<td><input type="text" name="nombre" id=nombre=  value="" placeholder="Nombre"></td>
					
						<td><label for="titularidad">Titularidad</label></td>
						<td>	<input type="text"	name="titularidad" id="titularidad" value=""  placeholder="¿Publica o Privada?"/></td>
					</tr>	
					<tr>	
						<td><label for="Poblacion"> Población</label></td>
						<td><input type="text" name="Poblacion" id="Poblacion"  value="" placeholder="Inserte población"/></td>
						
						<td><label for="provincia"> Provincia </label></td>
						<td><input type="text" name="provincia" id= "provinciaa" value="" placeholder="Inserta Provincia"/></td>
					</tr>
							
							<td><label for="convenio"> Convenio </label></td>
							<td><input type="text" name="convenio" id="convenio" placeholder="¿Si o No?"/></td>
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