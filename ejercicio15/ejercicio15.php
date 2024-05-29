<?php
if(isset($_POST['submit'])){
    $año = $_POST['año'];
    if ($año % 4 == 0 and $año % 100 !== 0 or $año % 400 == 0) {
        echo "el año ".$año." es bisiesto";
    } else {
        echo "el año ".$año." no es bisiesto";
    }
}
?>