<?php
include "funciones.php";
/*
 * Created by PhpStorm.
 * User: 2aasir11
 * Date: 27/02/2018
 * Time: 10:02
 */
if (isset($_POST["enviar"]))
{
    alta_alumno(); 
}
echo "<form method='post' action='pruebas.php'>";
$_POST["nombre"]="david";
$_POST["apellidos"]="montero";
$_POST["dni"]="72827642m";
$_POST["fechanac"]="07101994";
$_POST["telefono"]="123456789";
$_POST["email"]="ajksdfhakjdfn";
$_POST["euskera"]="no";
$_POST["carnet"]="no";
$_POST["otros"]="prueba1";
echo"<input type='submit' name='enviar' value='enviar'></form>";


?>