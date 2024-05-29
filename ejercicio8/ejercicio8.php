<?php
if(isset($_POST['submit'])){
    $figura = $_POST['figura'];
    switch ($figura) {
        case 'circulo':
            echo "<form method='post'>";
            echo "Ingrese el radio del círculo: <input type='number' name='radio'><br>";
            echo "<input type='submit' name='calcular_circulo' value='Calcular'>";
            echo "</form>";
            break;
        case 'cuadrado':
            echo "<form method='post'>";
            echo "Ingrese el valor del lado de su cuadrado: <input type='number' name='lado'><br>";
            echo "<input type='submit' name='calcular_cuadrado' value='Calcular'>";
            echo "</form>";
            break;
        case 'rectangulo':
            echo "<form method='post'>";
            echo "Ingrese la base de su rectangulo: <input type='number' name='base'><br>";
            echo "Ingrese la altura de su rectangulo: <input type='number' name='altura'><br>";
            echo "<input type='submit' name='calcular_rectangulo' value='Calcular'>";
            echo "</form>";
            break;
        default:
            echo "Seleccione una figura";
            break;
    }
}

if(isset($_POST['calcular_circulo'])){
    $radio = $_POST['radio'];
    $area = 3.14159 * $radio**2;
    $perimetro = 2 * 3.14159 * $radio;
    echo "El área de su círculo es: ".$area." y el perímetro es: ".$perimetro;
}
if(isset($_POST['calcular_cuadrado'])){
    $lado = $_POST['lado'];
    $area = $lado**2;
    $perimetro = 4 * $lado;
    echo "El área de su cuadrado es: ".$area." y el perímetro es: ".$perimetro;
}
if(isset($_POST['calcular_rectangulo'])){
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    $area = $base * $altura;
    $perimetro = 2 * ($base + $altura);
    echo "El área de su rectangulo es: ".$area." y el perímetro es: ".$perimetro;
}
?>