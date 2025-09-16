<?php
// Capturar datos del formulario
$nombre = $_POST['nombre'];
$curso = $_POST['curso'];
$numero = (int)$_POST['numero'];

// Calcular el cubo del número
$cubo = $numero ** 3;

// Mostrar resultados
echo "<h2>Resultados</h2>";
echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
echo "Curso de Formación: " . htmlspecialchars($curso) . "<br>";
echo "Cubo del número: " . $cubo . "<br>";

// Condición para mostrar mensaje especial
if ($cubo > 100) {
    echo "<strong>Eres muy afortunado</strong>";
}
?>
