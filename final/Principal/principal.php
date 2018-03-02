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
		</br></br>
		<div id="modificar">
		<form action="" method="post">
			<table class="modificar" width=100%>
				<tr>
				<td><strong>Selecciona el codigo del alumno que deseas modificar:</strong></td>
					<td><select name="codigo">
							<?php
								generar_select('alumnos','codigo')
							?>
						</select>
					</td>
					<td>
					  <input type="submit" value="Modificar">
					</td>
				</tr>
		</table>
		</form>
		</div>
		</br></br>
		<div id="borrar">
		<form action="" method="post">
			<table class="borrar">
				<tr>
				<td><strong>Selecciona el codigo del alumno que deseas eliminar:</strong><td>
					<td><select name="codigo">
							<?php
								generar_select('alumnos','codigo')
							?>
						</select>
					</td>
					<td>
					  <input type="submit" value="Borrar">
					</td>
				</tr>
		</table>
		</form>
		</div>
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