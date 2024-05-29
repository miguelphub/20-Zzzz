<?php
if (isset($_POST['submit'])) {
    $correo = $_POST['correo'];

    if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "<p>El correo electrónico '$correo' es válido.</p>";
    } else {
        echo "<p>El correo electrónico '$correo' no es válido.</p>";
    }
}
?>
