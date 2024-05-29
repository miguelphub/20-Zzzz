<?php
if(isset($_POST['temp'])) {
    $temperatura = $_POST['temp'];
    $dato = "";
    $unidad = "";


    for($i = 0; $i < strlen($temperatura); $i++) {
        $char = $temperatura[$i];


        if(is_numeric($char)) {
            $dato .= $char;
        } elseif($char == 'C' || $char == 'F') {
            $unidad = $char;
        }
    }


    if($unidad == 'C') {
        $fahrenheit = ($dato * 9/5) + 32;
        echo "$dato&deg;C es equivalente a $fahrenheit&deg;F";
    } elseif($unidad == 'F') {
        $celsius = ($dato - 32) * 5/9;
        echo "$dato&deg;F es equivalente a $celsius&deg;C";
    }
}
?>
