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
		<div id="buscar">
			<form action="" method="post">
		<table>
			<tr>
				<td class="busca"><a href="">Familias Profesionales</a></td>
				<td class="busca"><a href="">Ciclos Formativos </a></td>
			</tr>
			<tr>
				<td class="busca"><a href="">Alumnos  </a></td>
				<td class="busca"><a href="">Asignaciones </a></td>
			</tr>
			<tr>
				<td class="busca"><a href="">Profesores </a></td>
				<td class="busca"><a href="">Grupos </a></td>
			</tr>
			<tr>
				<td class="busca"><a href="">Empresas </a></td>
				<td class="busca"><a href="">Responsables </a></td>
			</tr>
			<tr>
				<td class="busca"><a href="">Ciclos Formativos </a></td>
				<td class="busca"><a href="">Ciclos Formativos </a></td>
			</tr>
		</table>
			</form>
		</div>
	</div>
		
	<div id="pie">
		<?php ver_pie(); ?>
	</div>
</div>

</body>
</html>