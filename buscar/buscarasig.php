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
		<?php ver_buscar("asignaciones","Asignaciones","las asignaciones","una asignacion");?>
		<div id="formbuscar">
			<h3> Buscar informacion de las Asignaciones </h3>
			<center>
			<table>
				<form action="buscarphpasignaciones.php" method="post">
					<tr>
						
						<td><label id="empresa">Empresa </label></td>
						<td><input type="text" name="empresa" placeholder="empresa"></td>
					
						<td><label id="contratacionalumno">Alumnx Contratadx</label></td>
						<td>	<input type="text"	name="contratacionalumno" placeholder="¿Si o No?"/></td>
					</tr>	
					<tr>	
						<td><label id="nombre"> Alumno </label></td>
						<td><input type="text" name="nombre"	placeholder="¿Si o No?"/></td>
						
						<td><label id="ciclo"> Ciclo cursado </label></td>
						<td><input type="text" name="abreviatura"	placeholder="Inserta abreviatura"/></td>
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

</body>
</html>