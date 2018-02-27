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
    $conexion=conectar("localhost","root","","asociaciones");
    $query="select usuario, contrasena from usuario where usuario='".$usuario."' and contrasena='".$contrasena."'";
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

     $nombre = recogvarc($_POST["nombre"]);
     $apellidos = recogvarc($_POST["apellidos"]);
     $fechanac = recoger($_POST["fecha"]);
     $telefono = recogernum($_POST["telefono"]);
     $email = recoger($_POST["email"]);
     $euskera = recoger($_POST["euskera"]);
     $carnet = recoger($_POST["carnet"]);
     $otros = recoger($_POST["otros"]);

    $conexion=conectar("localhost","root","","bd");
    $query="insert into usuario (nombre,contrasena,dni,usuario,apellidos,direccion,sexo,telefijo,telemovil) values('".$_POST["nombre"]."','".$_POST["pass"]."','".$_POST["dni"]."','".$_POST["usuario"]."','".$_POST["apellidos"]."','".$_POST["direccion"]."','".$_POST["sexo"]."',".$_POST["telefono_fijo"].",".$_POST["telefono_movil"].")";

    $r=mysqli_query ($conexion,$query) /*or die(mysqli_error())*/;


}