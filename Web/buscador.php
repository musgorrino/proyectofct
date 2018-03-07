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
				<th class="sombra"><a href="../buscar/buscarfamilia.php">Familias Profesionales</a></th><th class="espacio">---</th>
				<th class="sombra"><a href="../buscar/buscarcic.php">Ciclos Formativos </a></th><th class="espacio">---</th>
				<th class="sombra"><a href="../buscar/buscarempre.php">Empresas  </a></th><th class="espacio">---</th>
				<th class="sombra"><a href="../buscar/buscarresp.php">Responsables </a></th>
				<th class="sombra"><a href="../buscar/buscarusu.php"> Usuarios </a></th>
			</tr>
			<tr class="espacio">
			</tr>
			<tr>
				<th class="sombra"><a href="../buscar/buscarprof.php">Profesores</a></th><th class="espacio">---</th>
				<th class="sombra"><a href="../buscar/buscaralu.php">Alumnos </a></th><th class="espacio">---</th>
				<th class="sombra"><a href="../buscar/buscarasig.php">Asignaciones  </a></th><th class="espacio">---</th>
				<th class="sombra"><a href="../buscar/buscarhistori.php">Historial </a></th>
				<th class="sombra"><a href="../buscar/buscargrupo.php">Grupos </a></th>
			</tr>
		</table>
			
		
	<div id="pie">
		<?php ver_pie(); ?>
	</div>
</div>

</body>
</html>