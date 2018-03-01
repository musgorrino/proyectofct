<?php
/**
 * Created by PhpStorm.
 * User: 2aasir11
 * Date: 01/03/2018
 * Time: 9:42
 */
function conectar ($host,$user,$pass,$bd)
{
    $conexion = mysqli_connect ($host, $user, $pass,$bd);
    return $conexion;
}