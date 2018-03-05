<?php 

	//include("../funciones.php");

	include("../funciones.php");?>

<!DOCTYPE html>

<html lang="es">
<head>
	<title> Acceso a Gestion FCT </title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	
	<center><img src="../imagenes/login.png" alt="Logo Egibide"></center>
	<form action="login.php" method="post">
		<h2> Gestión FCT </h2>
		<input type="text" name="usuario" placeholder=" &#128590; usuario" size="30"/>
		<input type="password" name="contrasena" placeholder="&#128272; Contrasena" size="30"/>
		<input type="submit" name="enviar" value="Acceder"/>

	</form>
		<?php
        if (isset($_POST["enviar"]))
            {
                $usuario=$_POST ['usuario'];
			$contrasena=$_POST ['contrasena'];

			/*$consulta="SELECT * FROM usuarios WHERE usuarios='$usuario' and '$contrasena'";
			$resultado=mysqli_query($consulta);

			$filas=mysqli_num_rows ($resultado);*/
			$login=login($usuario,$contrasena);
			if ($login) {
				header ("location:http://localhost/proyectofct/Web/principal.php");
                
			}
			else {
				echo "Error en la autentificación";
			}
			//mysqli_free_result($resultado);
            }

			
			
			
		?>
	
	
</body>
</html>


