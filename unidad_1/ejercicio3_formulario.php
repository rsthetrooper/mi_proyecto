<?php
$mensaje = null;
$nombre = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Recibe los datos del formulario y elimina espacios sobrantes
    $nombre = trim($_POST["nombre"] ?? "");
    // Convierte la edad a entero para poder compararla
    $edad = $_POST["edad"] ?? "";

    if ($nombre !== "" && is_numeric($edad) && $edad >= 0) {
        $edad = (int)$edad;
        // Cadena de condiciones: se muestra el mensaje del primer rango que se cumpla
        if ($edad < 12) {
            $mensaje = "Hola $nombre, eres un niño.";
        } elseif ($edad < 18) {
            $mensaje = "Hola $nombre, eres un adolescente.";
        } elseif ($edad < 60) {
            $mensaje = "Hola $nombre, eres un adulto.";
        } else {
            $mensaje = "Hola $nombre, eres un adulto mayor.";
        }
    } else {
        $mensaje = "Complete nombre y una edad válida.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Formulario</title>
</head>
<body>
    <h2>Formulario: nombre y edad</h2>
    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre" value="<?= htmlspecialchars($nombre) ?>" required>
        <input type="number" name="edad" placeholder="Edad" min="0" required>
        <button type="submit">Enviar</button>
    </form>

    <?php if ($mensaje): ?>
        <p><strong><?= htmlspecialchars($mensaje) ?></strong></p>
    <?php endif; ?>

    <p><a href="index.php">Volver al menú</a></p>
</body>
</html>