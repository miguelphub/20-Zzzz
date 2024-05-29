<?php
if(isset($_POST['submit'])){
    $nacimiento = $_POST['nacimiento'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $año = 2024;
    $mes2 = 4;
    $dia1 = 7;
    $difaño = $año - $nacimiento;
    $difmeses = $mes2 - $mes;
    $difdia = $dia1 - $dia;
    echo "tienes".$difaño." años en el mes ".$difmeses." y tienes ".$difdia." dias"

}
?>