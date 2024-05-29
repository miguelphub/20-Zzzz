<?php
if(isset($_POST['submit'])){
    $tabla = $_POST['tabla'];
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $tabla * $i;
        echo "$tabla x $i = $resultado<br>";
}
}
?>