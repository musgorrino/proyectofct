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
		<?php ver_buscar("usuarios","Usuarios","los usuarios","un usuario nuevo");?>
		<div id="formbuscar">
			<h3> Buscar informacion de lxs Usuario </h3>
			<table>
				<form action="bsucarusu.php" method="post">
					<tr>
						<td><label for="nombre">Nombre </label></td>
						<td><input type="text" id="nombre" name="nombre" value="" placeholder="Nombre"></td>	
					</tr>	
					<tr>	
						<td><label for="tipo"> Tipo de Usuario</label></td>
						<td><input type="text"	name="tipo" id="tipo" value="" placeholder="¿Administrador o basico?"/></td>
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