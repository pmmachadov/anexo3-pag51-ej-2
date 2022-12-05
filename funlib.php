<?php
function comparar($cadena1, $cadena2)
{
    if (strcasecmp($cadena1, $cadena2) == 0) {
        echo "Las cadenas son iguales";
    } else {
        echo "Las cadenas son diferentes";
    }
}

$cadena1 = "Hola";
$cadena2 = "hola";

?>