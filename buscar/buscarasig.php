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
		<?php ver_buscar("asignaciones","Asignaciones","las asignaciones","una asignacion");?>
		<div id="formbuscar">
			<h3> Buscar informacion de las Asignaciones </h3>
			<center>
			<table>
				<form action="buscarasig.php" method="post">
					<tr>
						
						<td><label id="empresa">Empresa </label></td>
						<td><input type="text" name="empresa" value="<?php echo $_Post['empresa']; ?>" placeholder="empresa"></td>
					
						<td><label id="contratacionalumno">Alumnx Contratadx</label></td>
						<td>	<input type="text"	name="contratacionalumno" value="<?php echo $_Post['contratacionalumno']; ?>" placeholder="¿Si o No?"/></td>
					</tr>	
					<tr>	
						<td><label id="nombre"> Alumno </label></td>
						<td><input type="text" name="nombre" value="<?php echo $_Post['nombre']; ?>"	placeholder="Nombre"/></td>
						
						<td><label id="ciclo"> Ciclo cursado </label></td>
						<td><input type="text" name="abreviatura" value="<?php echo $_Post['ciclo']; ?>"	placeholder="Inserta abreviatura"/></td>
					</tr>
							<td><input type="hidden" name="" value=""></td>
							<td><input type="hidden" name="" value=""></td>
							<td><input type="hidden" name="" value=""></td>
							<td><input type="submit" name="enviar" value="BUSCAR"/>
					</tr>
				</form>
			</table>
			</center>
		</div>
	</div>
		
	<div id="pie">
		<?php ver_pie(); ?>
	</div>
</div>
<?php 
include("../../funciones/funciones.php");

$empresa=recoger($_Post['empresa']);
$contratacionalumno=recoger($_Post['contratacionalumno']);
$alumno=recoger($_Post['alumno']);
$curso=recoger($_Post['curso']);
$busqueda=array();
if($empresa==0){
$busqueda[]="empresa";
}
if($contratacionalumno==0){
$busqueda[]="contratacionalumno";
}
if($alumno==0){
$busqueda[]="alumno";
}
if($curso==0){
$busqueda[]="curso";
}
preparar_busqueda("asignaciones",$busqueda);
?>

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
		<?php ver_buscar("asignaciones","Asignaciones","las asignaciones","una asignacion");?>
		<div id="formbuscar">
			<h3> Buscar informacion de las Asignaciones </h3>
			<center>
			<table>
				<form action="buscarasig.php" method="post">
					<tr>
						
						<td><label id="empresa">Empresa </label></td>
						<td><input type="text" name="empresa" value="" placeholder="empresa"></td>
					
						<td><label id="contratacionalumno">Alumnx Contratadx</label></td>
						<td>	<input type="text"	name="contratacionalumno" value="" placeholder="¿Si o No?"/></td>
					</tr>	
					<tr>	
						<td><label id="nombre"> Alumno </label></td>
						<td><input type="text" name="nombre" value=""	placeholder="Nombre"/></td>
						
						<td><label id="ciclo"> Ciclo cursado </label></td>
						<td><input type="text" name="abreviatura" value=""	placeholder="Inserta abreviatura"/></td>
					</tr>
							<td><input type="hidden" name="" value=""></td>
							<td><input type="hidden" name="" value=""></td>
							<td><input type="hidden" name="" value=""></td>
							<td><input type="submit" name="enviar" value="BUSCAR"/>
					</tr>
				</form>
			</table>
			</center>
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