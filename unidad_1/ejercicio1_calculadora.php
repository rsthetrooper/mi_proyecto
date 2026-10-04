<?php
$resultado = null;
$error = null;

// Se ejecuta solo cuando el formulario fue enviado por POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = $_POST["num1"] ?? "";
    $num2 = $_POST["num2"] ?? "";
    $operacion = $_POST["operacion"] ?? "";

    // Valida que ambos valores sean numéricos antes de operar
    if (is_numeric($num1) && is_numeric($num2)) {
        // Según la opción elegida en el select, suma o resta
        if ($operacion === "suma") {
            $resultado = $num1 + $num2;
        } elseif ($operacion === "resta") {
            $resultado = $num1 - $num2;
        } else {
            $error = "Operación no válida.";
        }
    } else {
        $error = "Ingrese dos números válidos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Calculadora</title>
</head>
<body>
    <h2>Calculadora básica</h2>
    <form method="post">
        <input type="number" step="any" name="num1" placeholder="Número 1" required>
        <select name="operacion">
            <option value="suma">+ Suma</option>
            <option value="resta">- Resta</option>
        </select>
        <input type="number" step="any" name="num2" placeholder="Número 2" required>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($resultado !== null): ?>
        <p><strong>Resultado: <?= $resultado ?></strong></p>
    <?php endif; ?>

    <?php if ($error): ?>
        <p style="color:red;"><?= $error ?></p>
    <?php endif; ?>

    <p><a href="index.php">Volver al menú</a></p>
</body>
</html>