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

		<div id="buscar">
			
			</br>
		<table>
			<tr>
				<th class="sombra"><a href="">Familias Profesionales</a></th><th class="espacio">---</th>
				<th class="sombra"><a href="../buscar/buscarcic.php">Ciclos Formativos </a></th><th class="espacio">---</th>
				<th class="sombra"><a href="">Empresas  </a></th><th class="espacio">---</th>
				<th class="sombra"><a href="">Responsable </a></th>
			</tr>
			<tr class="espacio">
			</tr>
			<tr>
				<th class="sombra"><a href="">Profesores</a></th><th class="espacio">---</th>
				<th class="sombra"><a href="../buscar/buscaralu.php">Alumnos </a></th><th class="espacio">---</th>
				<th class="sombra"><a href="../buscar/buscarasig.php">Asignaciones  </a></th><th class="espacio">---</th>
				<th class="sombra"><a href="">Historial </a></th>
			</tr>
		</table>
			
		
	<div id="pie">
		<?php ver_pie(); ?>
	</div>
</div>

</body>
</html>