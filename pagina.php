<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Crea una función que reciba dos cadenas como parámetros y retorna un valor
lógico indicando si ambas son iguales sin considerar diferencias entre mayúsculas y
minúsculas.  -->

    <?php
    include 'funlib.php';

    echo "<table border = 1>";
    echo "<tr>";
    echo "  <td> Pablo  </td>";
    echo "  <td> Machado </td>";
    echo "</tr>";
    echo "<td> " . "Ejercicio" . "</td>";
    echo "<td> " . "anexo3-pag51-ej2" . "</td>";
    echo "</tr>";
    echo "<td> " . "    comparar($cadena1, $cadena2);
" . "</td>";
    echo "<td> " . "Las cadenas son iguales" . "</td>";
    echo "</tr>";
    echo "</table>";

    comparar($cadena1, $cadena2);
    ?>

</body>

</html>