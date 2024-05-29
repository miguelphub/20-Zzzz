<?php
    if(isset($_POST['submit'])) {
        if(isset($_POST['cadena'])) {
            $cadena = $_POST['cadena'];

            $cadena_invertida = strrev($cadena);


            echo "<h3>Cadena invertida:</h3>";
            echo $cadena_invertida;
        } else {
            echo "Por favor, introduce una cadena válida.";
        }
    }
    ?>