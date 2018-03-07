<?php 
include("../funciones.php");
 
cabecera("Gestion FCT", "../Web/estilo.css");
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
				<form action="buscarphpprofesores.php" method="post">
					<tr>
						<td><label id="nombre">Nombre </label></td>
						<td><input type="text" name="nombre" value="" placeholder="Nombre"></td>	
					</tr>	
					<tr>	
						<td><label id="codigointerprof">Codigo Interno Profesores</label></td>
						<td><input type="text"	name="codigointerprof" value="" placeholder="Inserte codigo"/></td>
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

</body>
</html>