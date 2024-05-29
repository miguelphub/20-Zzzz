<?php
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];
    switch ($operacion) {
        case 'sumar':
            $resultado = $num1 + $num2;
            break;
        case 'resta':
            $resultado = $num1 - $num2;
            break;
        case 'multiplicacion':
            $resultado = $num1 * $num2;
            break;
        case 'division':
            $resultado = $num1 / $num2;
            break;
        
        default:
            $resultado = "sin resultados";
            break;
    }
    echo "el resultado de tu operacion ".$operacion." es igual a ".$resultado."👍";
}
?>