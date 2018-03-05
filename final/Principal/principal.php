<?php 
include("../funciones/funciones.php");
 
cabecera("Gestion FCT", "estilos.css");
?>
<div id="contenedor">
	<div id="cabecera">
		<div id="login">
			<h5> Usuario conectado:  </h5>
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
		<center><h3> GESTION DE FORMACIÓN EN CENTRO DE TRABAJO </h3> </center>
		
		<?php coger_tablas("alumnos")?>
	</div>
	
	
<div id="contenido">
		</div>
		
<div id="pie">
		
		<div id="copyright" class="container">
			 <a href="principal.php" class="button">Volver al Inicio</a> 
			<p>PAGINA WEB DESIGNADA POR GAMUSINO</p>
		
		</div>
	</div>
</div>

</body>
</html>