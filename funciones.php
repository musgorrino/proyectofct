<?php
/**
 * Created by PhpStorm.
 * User: 2aasir11
 * Date: 27/02/2018
 * Time: 8:47
 */
function recogedni($dni)
{
    $dni=ltrim($dni);
    $formato=preg_match('/[0-9]{7,8}[A-Z]/', $dni);
    if($dni=='' || $formato==0)
    {
        return 1;
    }
    else
    {


                return 0;
    }

}
function recogvarc($valor)
{

    $valor2=ltrim($valor);
    if($valor2=='' || !comprobarnonum($valor2))
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
function recogernum($valor)
{
    $valor2=ltrim($valor);
    if($valor2=='' || !comprobarnum($valor2) )
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
function recoger($valor)
{
    $valor2=ltrim($valor);
    if($valor2=='')
    {
        return 1;
    }
    else
    {
        return 0;
    }
}
function comprobarnum($valor)
{
    if(preg_match("/^[0-9]*$/",$valor))
    {
        return true;
    }
    else
    {
        return false;
    }
}
function comprobarnonum($valor)
{

    if(preg_match("|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|",$valor)){
        return true;
    }
    else
    {
        return false;
    }
}
function conectar ($host,$user,$pass,$bd)
{
    $conexion = mysqli_connect ($host, $user, $pass,$bd);
    return $conexion;
}
function poner_datos($dato)
{
    if(isset($_POST[$dato]))
    {
        return $_POST[$dato];
    }
}
function login($usuario,$contrasena)
{
    $conexion=conectar("localhost","root","","mydb");
    $query="select usuario, password from usuarios where usuario='".$usuario."' and password='".$contrasena."'";
    $r=mysqli_query ($conexion,$query);
    $totalfilas=mysqli_num_rows($r);
    if($totalfilas==1)
    {
        return true;
    }
    else
    {
        return false;
    }
}
function alta_alumno()
{


    $dni = recogedni($_POST["dni"]);

    if ($dni == 1) {
        return "Por favor introduzca un dni con el formato adecuado";
    }
    $nombre = recogvarc($_POST["nombre"]);

    if ($nombre == 1) {
        return "Nombre vacio o con caracteres numericos";
    }
    $apellidos = recogvarc($_POST["apellidos"]);

    if ($apellidos == 1) {
        return "Apellidos vacios o con caracteres numericos";
    }
    $fechanac = recoger($_POST["fechanac"]);

    if ($fechanac == 1) {
        return "Campo fecha vacio";
    }
    $telefono = recogernum($_POST["telefono"]);

    if ($telefono == 1) {
        return "Campo telefono vacio o con caracteres no numericos";
    }
    $email = recoger($_POST["email"]);

    if ($email == 1) {
        return "Campo email vacio";
    }
    $euskera = recoger($_POST["euskera"]);

    if ($euskera == 1) {
        return "Seleccion eleccion idioma euskera no completada";
    }
    $carnet = recoger($_POST["carnet"]);

    if ($carnet == 1) {
        return "Seleccion carnet no completada";
    }
    $otros = recoger($_POST["otros"]);

    $conexion = conectar("localhost", "root", "", "mydb");
    if ($otros == 1) {
        $query = "insert into alumnos (nombre,apellidos,dni,fechanac,telefono,email,euskera,carnet) values('" . $_POST["nombre"] . "','" . $_POST["apellidos"] . "','" . $_POST["dni"] . "','" . $_POST["fechanac"] . "','" . $_POST["telefono"] . "','" . $_POST["email"] . "','" . $_POST["euskera"] . "','" . $_POST["carnet"] . "')";
    } else {
        $query = "insert into alumnos (nombre,apellidos,dni,fechanac,telefono,email,euskera,carnet,otros) values('" . $_POST["nombre"] . "','" . $_POST["apellidos"] . "','" . $_POST["dni"] . "','" . $_POST["fechanac"] . "','" . $_POST["telefono"] . "','" . $_POST["email"] . "','" . $_POST["euskera"] . "','" . $_POST["carnet"] . "','" . $_POST["otros"] . "')";

    }
    $r = mysqli_query($conexion, $query); /*or die(mysqli_error())*/
    return "Alumno insertado correctamente";
}
    function coger_tablas($nombretabla)
    {
        $conexion = conectar("localhost", "root", "", "mydb");
        $query = "describe ".$nombretabla;
        $r = mysqli_query($conexion, $query);
        $_fila = mysqli_fetch_assoc($r);
        $tabla = array();
        while ($_fila) {

            $tabla[] = $_fila["Field"];
            $_fila = mysqli_fetch_assoc($r);
        }
        crear_tablas($tabla,$nombretabla);

    }

    function crear_tablas($array,$nombretabla)
    {
        $conexion = mysqli_connect("localhost", "root", "", "mydb");
        $recogida = "select * from ".$nombretabla;
        $datos = mysqli_query($conexion,$recogida);


        ?>      <h3>
        <?php echo strtoupper($nombretabla);?>
    </h3>
        <table border=1>
            <thead><?php foreach ($array as $i) {
                    ?><th><?php echo ucfirst($i);?></th>
               <?php } ?></thead>
            <?php


            $_fila = mysqli_fetch_assoc($datos);
            while ($_fila)
            {

            ?>
            <tr>
                <?php foreach ($array as $i) {
                    ?>
                    <td><?php echo $_fila[$i]; ?></td><?php
                } ?>
            <tr>
                <?php

                $_fila = mysqli_fetch_assoc($datos);
                }

                ?>
        </table>
        <?php
        mysqli_close($conexion);

    }

