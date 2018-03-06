<?php 
include("../funciones.php");
 
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
		<?php ver_buscar("usuarios","Usuarios","los usuarios","un usuario nuevo");?>
		<div id="formbuscar">
	<h3> Buscar informacion de alumnxs </h3>
	<table>
		<form action="buscarphpalumno.php" method="post">
		<tr>
			
			<td><label id="nombre">Nombre </label></td>
			<td><input type="text" name="nombre" placeholder="Nombre"></td>
		
			<td><label id="euskera">Conocimiento de Euskera</label></td>
			<td>	<input type="text"	name="euskera" placeholder="¿Si o No?"/></td>
		</tr>	
		<tr>	
			<td><label id="carnet"> Dispone de carnet de conducir </label></td>
			<td><input type="text" name="carnet"	placeholder="¿Si o No?"/></td>
			
			<td><label id="ciclo"> Ciclo cursado </label></td>
			<td><input type="text" name="abreviatura"	placeholder="Inserta abreviatura"/></td>
		</tr>
				
				<td><label id="curso"> Curso </label></td>
				<td><input type="text" name="curso"	placeholder="Inserte curso"/></td>
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