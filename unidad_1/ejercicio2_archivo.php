<?php
// Ruta absoluta del archivo, relativa a la carpeta del script
$archivo = __DIR__ . "/datos.txt";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Lectura de archivo TXT</title>
</head>
<body>
    <h2>Contenido de datos.txt</h2>

    <?php
    if (file_exists($archivo)) {
        // Abre el archivo en modo lectura
        $gestor = fopen($archivo, "r");
        $numeroLinea = 1;
        // fgets lee una línea por vuelta; devuelve false al llegar al final
        while (($linea = fgets($gestor)) !== false) {
            echo "Línea " . $numeroLinea . ": " . htmlspecialchars($linea) . "<br>";
            $numeroLinea++;
        }
        // Cierra el archivo al terminar
        fclose($gestor);
    } else {
        echo "<p style='color:red;'>El archivo datos.txt no existe.</p>";
    }
    ?>

    <p><a href="index.php">Volver al menú</a></p>
</body>
</html>