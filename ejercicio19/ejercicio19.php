<?php
if (isset($_POST['submit'])) {
    $oracion = $_POST['oracion'];
    $oracion_minusculas = strtolower($oracion);
    $palabra_prohibida = '/\bhola|pedro|tilin\b/' ;
    if (preg_match($palabra_prohibida, $oracion_minusculas)) {
        echo "La oración contiene una palabra prohibida.";
    } else {
        echo "La oración no contiene palabras prohibidas.";
    }
}
?>
