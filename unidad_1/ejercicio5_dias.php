<?php
// Arreglo con los 7 días de la semana
$dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
// foreach recorre el arreglo; en cada vuelta $dia toma un valor distinto
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 - Array y FOREACH</title>
</head>
<body>
    <h2>Días de la semana</h2>
    <ul>
    <?php foreach ($dias as $dia): ?>
        <li><?= $dia ?></li>
    <?php endforeach; ?>
    </ul>

    <p><a href="index.php">Volver al menú</a></p>
</body>
</html>