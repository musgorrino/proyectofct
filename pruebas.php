<?php
include "funciones.php";
/*
 * Created by PhpStorm.
 * User: 2aasir11
 * Date: 27/02/2018
 * Time: 10:02
 */
/*if (isset($_POST["enviar"]))
{
    alta_alumno();
}
echo "<form method='post' action='pruebas.php'>";
?>
<input type="hidden" name="nombre" value="david">
<input type="hidden" name="apellidos" value="montero">
<input type="hidden" name="dni" value="72857642M">
<input type="hidden" name="fechanac" value="07101994">
<input type="hidden" name="telefono" value="123456789">
<input type="hidden" name="email" value="sdgsfsdf">
<input type="hidden" name="euskera" value="no">
<input type="hidden" name="carnet" value="no">
<input type="hidden" name="otros" value="prueba1"><?php /*
$_POST["nombre"]="david";
$_POST["apellidos"]="montero";
$_POST["dni"]="72827642M";
$_POST["fechanac"]="07101994";
$_POST["telefono"]="123456789";
$_POST["email"]="ajksdfhakjdfn";
$_POST["euskera"]="no";
$_POST["carnet"]="no";
$_POST["otros"]="prueba1";*/
//echo"<input type='submit' name='enviar' value='enviar'></form>";


/*
 Prueba generacion listas dinamicas
$conexion=conectar("localhost","root","","mydb");
$query="describe alumnos";
$r=mysqli_query($conexion,$query);
$_fila=mysqli_fetch_assoc($r);
$tabla=array();
while ($_fila)
{

    $tabla[]=$_fila["Field"];
    $_fila=mysqli_fetch_assoc($r);
}
?>
<table border=1>
            <tr><?php

                foreach ($tabla as $i)
                {
                echo "<td>$i</td>";
                }?></tr>
<?php
$conexion=mysqli_connect("localhost","root","","mydb");
$recogida="select * from mydb.alumnos";
$datos=mysqli_query($conexion,$recogida);
$totalfilas= mysqli_num_rows($datos);
if ($totalfilas>0){
$_fila=mysqli_fetch_assoc($datos);
while ($_fila)
{
?>
<tr>
    <?php foreach ($tabla as $i)
    {
        ?>
    <td><?php echo $_fila[$i];?></td>
       <?php } ?>
<tr>
    <?php

    $_fila=mysqli_fetch_assoc($datos);
    }
    }
    ?>
    </table>

Prueba generacion selects dinamicas
*/
coger_tablas("grupo");


?>


