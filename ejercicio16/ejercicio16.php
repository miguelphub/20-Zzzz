<?php
if(isset($_POST['temp'])) {
    $temperatura = $_POST['temp'];
    $dato = "";
    $unidad = "";


    for($i = 0; $i < strlen($temperatura); $i++) {
        $char = $temperatura[$i];


        if(is_numeric($char)) {
            $dato .= $char;
        } elseif($char == 'C' or $char == 'F' or $char == 'K') {
            $unidad = $char;
        }
    }


    if($unidad == 'C') {
        $fahrenheit = ($dato * 9/5) + 32;
        $kelvin = $dato + 273.15;
        echo "<p>$dato&deg;C es equivalente a $fahrenheit&deg;F y $kelvin K</p>";
    } elseif($unidad == 'F') {
        $celsius = ($dato - 32) * 5/9;
        echo "$dato&deg;F es equivalente a $celsius&deg;C";
        $kelvin = ($dato + 459.67) * 5/9;
        echo "<p>$dato&deg;F es equivalente a $celsius&deg;C y $kelvin K</p>";
    }
    elseif ($unidad == 'K') {
        $celsius = $dato - 273.15;
        $fahrenheit = ($dato * 9/5) - 459.67;
        echo "<p>$dato K es equivalente a $celsius&deg;C y $fahrenheit&deg;F</p>";
    }
}
?>
