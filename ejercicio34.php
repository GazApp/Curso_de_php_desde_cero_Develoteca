<?php
$mensaje = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["txt_comentario"])) {
        $comentario = trim($_POST["txt_comentario"]);

        if ($comentario === "") {
            $error = "El campo de comentario está vacío.";
        } elseif (strlen($comentario) > 500) {
            $error = "El comentario es demasiado largo (máx. 500 caracteres).";
        } else {
            $mensaje = htmlspecialchars($comentario, ENT_QUOTES, 'UTF-8');
        }
    } else {
        $error = "No se envió el comentario.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto de Area</title>
</head>

<body>
    <form action="ejercicio34.php" method="post">
        <h3>¿Tienes algun comentario?</h3>
        <br><br>
        <textarea name="txt_comentario" id="" cols="30" rows="10"></textarea>
        <br><br>

        <button type="submit">Enviar</button>

    </form>

    <!-- Mostrar mensaje si existe -->
    <?php if (!empty($mensaje)): ?>
        <h3 style="color:blue">Hola este es texto desde html:&nbsp <?= $mensaje ?></h3>
    <?php elseif (!empty($error)): ?>
        <h3 style="color:red"><?= $error ?></h3>
    <?php endif; ?>

</body>

</html>