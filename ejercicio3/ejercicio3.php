<?php
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if ($num1 > $num2 && $num1 > $num3) {
        echo "El número mayor es " . $num1;
    } elseif ($num2 > $num1 && $num2 > $num3) {
        echo "El número mayor es " . $num2;
    } elseif ($num3 > $num1 && $num3 > $num2) {
        echo "El número mayor es " . $num3;
    } else {
        echo "Los números son iguales";
    }
}
?>
