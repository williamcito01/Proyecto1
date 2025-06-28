<?php
$var1 = $_POST["valor1"];
$var2 = $_POST["valor2"];

if (isset($_POST["check1"])) {
    $suma = $var1 + $var2;
    echo "El resultado es: " . $suma;
}
elseif (isset($_POST["check2"])) {
    $resta = $var1 - $var2;
    echo "El resultado es: " . $resta;
}
elseif (isset($_POST["check3"])) {
    $producto = $var1 * $var2;
    echo "El resultado es: " . $producto;
}
elseif (isset($_POST["check4"])) {
    $division = $var1 / $var2;
    echo "El resultado es: " . $division;
}
else {
    echo "No ha seleccionado una casilla de operación";
}
?>
