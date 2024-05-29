<?php
if(isset($_POST['submit'])){
    $edad = $_POST['edad'];
    if ($edad > 18) {
        echo "Eres mayor de edad 👌";
    } else {
        echo "Eres menor de edad ❌";
    }
}
?>
