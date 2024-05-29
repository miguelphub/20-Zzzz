<?php
if(isset($_POST['submit'])){
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $convertir = $peso / $altura**2;
    echo "Entonces, el IMC sería aproximadamente: ". number_format($convertir, 2);

}
?>