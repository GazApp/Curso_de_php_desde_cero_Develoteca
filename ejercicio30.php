<?php
$texto = 'El "café" cuesta < $5.00';
// htmlspecialchars convierte caracteres especiales a entidades HTML
// Esto es útil para evitar ataques XSS (Cross-Site Scripting)
// htmlspecialchars convierte caracteres especiales a entidades HTML
// htmlspecialchars($texto, ENT_QUOTES, 'UTF-8') convierte comillas simples y dobles
echo htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
echo '<br/>';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["nombre"]);

    // Validación simple

    if (empty($nombre)) {
        echo "El nombre es obligatorio.";
    } elseif (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/", $nombre)) {
        echo "El nombre solo puede contener letras y espacios.";
    } else {
        echo "Nombre válido: " . htmlspecialchars($nombre);
    }
}
/*
 * Evita campos vacíos

Asegura que el nombre solo tenga letras y espacios

Protege contra ataques XSS con htmlspecialchars()
 */


/**
 * if (isset($_POST)) {
 * //$txt_Nombre = (isset($_POST['txt_Nombre'])) ? $_POST('txt_Nombre') : "";
 * $nombre = (isset($_POST["txt_Nombre"]));
 * // echo "Hola " . $nombre;
 * }
 */

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
</head>

<body>

<h2>Formulario</h2>
<br/>
<form action="ejercicio30.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
