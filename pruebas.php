<?php
include "funciones.php";

/*coger_tablas("profesor");*/
if (isset($_POST["enviar"]))
{
    
    count($_POST);
    var_dump($_POST);
}

?>
<form method="post" action="pruebas.php">
    <input type="hidden" name="cosa1" value="1">
    <input type="hidden" name="cosa2" value="2">
    <input type="hidden" name="cosa3" value="3">
    <input type="hidden" name="cosa4" value="4">
    <input type="submit" name="enviar" value="enviar">
</form>