<?php
if(isset($_POST['submit'])){
$cadena = $_POST['cadena'];
echo "Longuitud cadena ".strlen($cadena)."<br>";
echo "cadena en minusculas ".strtolower($cadena)."<br>";
echo "cadena en mayusculas ".strtoupper($cadena)."<br>";
}
?>