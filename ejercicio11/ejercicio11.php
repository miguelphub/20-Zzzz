<?php
if(isset($_POST['submit'])){
    $moneda = $_POST['moneda'];
    $convertir = $moneda * 10.68;
    echo "La cantidad ingresada Q".$moneda." equivale a: ".$convertir." Rupia India";

}
?>