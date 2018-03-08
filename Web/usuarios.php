<?php 
include("../funciones.php");
session_start();
    if(isset($_SESSION["usuario"]))
    {
        $usuario=unserialize($_SESSION["usuario"]);
       
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
				<th class="sombra"><a href="">Familias Profesionales</a></th><th class="espacio">---</th>
				<th class="sombra"><a href="">Ciclos Formativos </a></th>
			</tr>
			<tr class="espacio">
			</tr>
			<tr>
				<th class="sombra"><a href="">Alumnos  </a></th><td></td>
				<th class="sombra"><a href="">Asignaciones </a></th>
			</tr>
			<tr class="espacio">
			</tr>
			<tr>
				<th class="sombra"><a href="">Profesores </a></th><td></td>
				<th class="sombra"><a href="">Grupos </a></th>
			</tr>
			<tr class="espacio">
			</tr>
			<tr>
				<th class="sombra"><a href="">Empresas </a></th><td></td>
				<th class="sombra"><a href="">Responsables </a></th>
			</tr>
			<tr class="espacio">
			</tr>
			<tr>
				<th class="busca"><a href="">Ciclos Formativos </a></th><td></td>
				<th class="busca"><a href="">Ciclos Formativos </a></th>
			</tr>
		</table>
			
		
	<div id="pie">
		<?php ver_pie(); ?>
	</div>
</div>

</body>
</html>
<?php
 }
 else
 {
	 header("location:../indice.php");
 }


?