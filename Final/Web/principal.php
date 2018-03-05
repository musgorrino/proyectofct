<?php 
include("../funciones/funciones.php");
 
cabecera("Gestion FCT", "estilo.css");
?>
<div id="contenedor">
	<div id="cabecera">
		<div id="login">
		</div>
		<div id="logo">
			<img src="../imagenes/logo.png"> 
		</div>
		
		<div id="menu">
			
				<ul>
				<li class="espacio">----------------</li>
				  <li><a href="../familias.php">Familias Profesionales</a></li>
				  <li><a href="../ciclos.php">Ciclos Formativos</a></li>
				  <li><a href="../grupos.php">Grupos</a></li>
				  <li><a href="../profesores.php">Profesores</a></li>
				  <li><a href="../alumnos.php">Alumnos </a></li>
				  <li><a href="../asignaciones.php">Asignaciones</a></li>
				  <li><a href="../empresas.php">Empresas</a></li>
				  <li><a href="../responsables.php">Responsables</a></li>
				</ul>				
		</div>
		
	</div>
	
	
	<div id="contenido">
		<?php
		  ver_contenido("alumnos","Alumnos","los alumnos");
		?>
	</div>
		
<div id="pie">
		
		<div id="copyright" 
			 <a href="principal.php">Volver al Inicio</a> 
			<p>PAGINA WEB DESIGNADA POR GAMUSINO</p>
		
		</div>
	</div>
</div>

</body>
</html>