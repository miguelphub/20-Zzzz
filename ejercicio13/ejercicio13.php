<?php
if(isset($_POST['submit'])) {
    if(isset($_POST['longitud'])) {
        $longitud = $_POST['longitud'];
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~';
        $longitud_caracteres = strlen($caracteres);
        $contraseña = '';
        for ($i = 0; $i < $longitud; $i++) {
            $caracter_aleatorio = $caracteres[rand(0, $longitud_caracteres - 1)];
            $contraseña .= $caracter_aleatorio;
        }
        if ($longitud >= 6 && $longitud <= 20) {
            echo "<h3>Contraseña Generada:</h3>";
            echo "<strong>$contraseña</strong>";
        } else {
            echo "La longitud de la contraseña debe estar entre 6 y 20 caracteres.";
        }
    } else {
        echo "Por favor, introduce una longitud válida para la contraseña.";
    }
} else {
    echo "Por favor, envía el formulario para generar la contraseña.";
}
?>
