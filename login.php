<?php 
	include("funciones.php");
?>
<!DOCTYPE html>

<html lang="es">
<head>
	<title> Acceso a Gestion FCT </title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./estilos/estilo.css">
</head>
<body>
	
	<center><img src="./estilos/images/logo.png" alt="Logo Egibide"></center>
	<form action="login.php" method="post">
		<h2> Gestión FCT </h2>
		<input type="text" name="usuario" placeholder=" &#128590; usuario" size="30"/>
		<input type="password" name="codigo" placeholder="&#128272; Contraseña" size="30"/>
		<input type="submit" name="" value="Acceder"/>

	</form>
		<?php 
			$usuarios=$_POST ['usuarios'];
			$clave=$_POST ['codigo'];

			$consulta="SELECT * FROM usuarios WHERE usuarios='$usuarios' and '$codigo'";
			$resultado=mysqli_query($consulta);

			$filas=mysqli_num_rows ($resultado);
			if ($filas>0) {
				header ("location:../final/principal/principal.php");
			}
			else {
				echo "Error en la autentificación";
			}
			mysqli_free_result($resultado);
			
			
			
		?>
	
	
</body>
</html>


