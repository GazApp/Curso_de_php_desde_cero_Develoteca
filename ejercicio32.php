<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Procesar radio button
    if (isset($_POST['lenguaje'])) {
        $lenguaje = htmlspecialchars($_POST['lenguaje']);
        echo "Lenguaje seleccionado: $lenguaje<br>";
    } else {
        echo "No se seleccionó ningún lenguaje.<br>";
    }

    // Procesar checkboxes
    if (!empty($_POST['intereses'])) {
        echo "Intereses seleccionados:<br>";
        foreach ($_POST['intereses'] as $interes) {
            echo "- " . htmlspecialchars($interes) . "<br>";
        }
    } else {
        echo "No se seleccionó ningún interés.<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="ejercicio32.php">
    <h3>Selecciona tu lenguaje favorito:</h3>
    <input type="radio" name="lenguaje" value="PHP"> PHP<br>
    <input type="radio" name="lenguaje" value="JavaScript"> JavaScript<br>
    <input type="radio" name="lenguaje" value="Python"> Python<br>

    <h3>Selecciona tus intereses:</h3>
    <input type="checkbox" name="intereses[]" value="Desarrollo Web"> Desarrollo Web<br>
    <input type="checkbox" name="intereses[]" value="Data Science"> Data Science<br>
    <input type="checkbox" name="intereses[]" value="Ciberseguridad"> Ciberseguridad<br>

    <button type="submit">Enviar</button>
</form>

</body>
</html>