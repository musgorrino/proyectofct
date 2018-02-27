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

        if(comprobarDniu($dni)==2)
        {
            return 2;
        }
        else
        {
            if (comprobarDnif($dni)==3)
            {
                return 3;

            }
            else
            {
                return 0;
            }
        }
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
