<?php
include "funciones.php";

/*coger_tablas("profesor");*/
if (isset($_POST["enviar"]))
{
    $insert="insert into prueba()";
    $columnas=coger_nombres("grupos");
    foreach($columnas as $i)
    {
        if ($i!="codigo")
        {
            $insert=$insert.",".$i;
        }
    }
    $insert=$insert.") values(";
    

}

?>
<form method="post" action="pruebas.php">
    <input type="hidden" name="cosa1" value="1">
    <input type="hidden" name="cosa2" value="2">
    <input type="hidden" name="cosa3" value="3">
    <input type="hidden" name="cosa4" value="4">
    <input type="submit" name="enviar" value="enviar">
</form>