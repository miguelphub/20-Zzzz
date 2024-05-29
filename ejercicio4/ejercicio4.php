<?php
if(isset($_POST['submit'])){
   
    echo "<h2>Primeros 20 números pares:</h2>";
    echo "<ul>";
    for ($i = 1; $i <= 40; $i++) {
        if ($i % 2 == 0) {
            echo "<li>$i</li>";
        }
    }
    echo "</ul>";
    
    echo "<h2>Primeros 20 números impares:</h2>";
    echo "<ul>";
    for ($i = 1; $i <= 40; $i++) {
        if ($i % 2 != 0) {
            echo "<li>$i</li>";
        }
    }
    echo "</ul>";
}
    
?>
