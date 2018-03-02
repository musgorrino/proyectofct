<?php 
include("../funciones/funciones.php");
 
cabecera("Gestion FCT", "estilos.css");
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
<center></br><h3> GESTION DE FORMACIÓN EN CENTRO DE TRABAJO </h3> </center>
		
		<?php coger_tablas("alumnos")?>
		
		<form action="" method="post">
			<table class="modificar">
				<tr>
				<td><label for="codigo">Selecciona el codigo del alumno que deseas modificar:</label></td>
					<td><select name="codigo" id="codigo">
							<?php
								generar_select('alumnos','codigo')
							?>
						</select>
					</td>
				</tr>
				</tr>
					<td>
					<input type="submit" value="Modificar" name="modificar" />
					</td>
				</tr>
		</table>
		</form>
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