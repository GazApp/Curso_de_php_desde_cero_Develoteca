<?php
$mensaje = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["sistema_operativo"])) {
        $so = trim($_POST["sistema_operativo"]);
        $validos = ["Windows", "Linux", "Mac"];

        if ($so === "") {
            $error = "NO SELECCIONASTE NINGUNA OPCIÓN";
        } elseif (in_array($so, $validos)) {
            $mensaje = htmlspecialchars($so, ENT_QUOTES, 'UTF-8');
        } else {
            $error = "Valor no válido.";
        }
    } else {
        $error = "No seleccionaste un sistema operativo.";
    }
} else {
    $error = "Acceso inválido al formulario.";
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

    <form action="ejercicio33.php" method="post">
        <h3>¿Cuál es tu Sistema Operativo?</h3>
        <select name="sistema_operativo" id="">
            <option value="">Selecciona una opción:</option>
            <option value="Windows">Windows</option>
            <option value="Linux">Linux</option>
            <option value="Mac">Mac</option>
        </select>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    <!-- <form action="ejercicio33.php" method="post">
    <h3>¿Cuál es tu Sistema Operativo?</h3>
    <select name="sistema_operativo" id="">
        <option value="" <?= ($so ?? '') === '' ? 'selected' : '' ?>>Selecciona una opción:</option>
        <option value="Windows" <?= ($so ?? '') === 'Windows' ? 'selected' : '' ?>>Windows</option>
        <option value="Linux" <?= ($so ?? '') === 'Linux' ? 'selected' : '' ?>>Linux</option>
        <option value="Mac" <?= ($so ?? '') === 'Mac' ? 'selected' : '' ?>>Mac</option>
    </select>
    <br><br>
    <button type="submit">Enviar</button>
</form> -->


   <!-- Mostrar mensaje si existe -->
<?php if (!empty($mensaje)): ?>
    <h2 style="color:blue">Hola tu Sistema Operativo Favorito es: &nbsp<?= $mensaje ?></h2>
<?php elseif (!empty($error)): ?>
    <h2 style="color:red"><?= $error ?></h2>
<?php endif; ?>


</body>

</html>