<?php
if(isset($_POST['submit'])){
    $texto = $_POST['texto'];
    $contadorCaracteres = strlen($texto);
    echo "el total de caracteres del texto es: ".$contadorCaracteres;
}
?>