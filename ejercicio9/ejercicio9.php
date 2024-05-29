<?php
    if (isset($_POST['submit'])) {
        $texto = $_POST['texto'];
        $texto = trim($texto);
        $num_palabras = str_word_count($texto);
        echo "<p>Número de palabras en el texto: $num_palabras</p>";
    }
    ?>