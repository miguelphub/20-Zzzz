<?php
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $ganador = rand(1, 10) === 1;
    if ($ganador) {
        echo "¡Felicidades, $nombre! ¡Has ganado el sorteo!";
    } else {
        echo "Lo siento, $nombre. No has ganado esta vez. ¡Inténtalo de nuevo en nuestro próximo sorteo!";
 


    }
}

?>