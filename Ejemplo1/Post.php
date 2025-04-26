<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $edad = trim($_POST["edad"]);

    $errores = [];

    // Validar nombre
    if (empty($nombre)) {
        $errores[] = "El nombre es obligatorio.";
    } elseif (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/", $nombre)) {
        $errores[] = "El nombre solo puede contener letras y espacios.";
    }

    // Validar email
    if (empty($email)) {
        $errores[] = "El correo electrónico es obligatorio.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo no tiene un formato válido.";
    }

    // Validar edad (debe ser un número entero positivo)
    if (empty($edad)) {
        $errores[] = "La edad es obligatoria.";
    } elseif (!filter_var($edad, FILTER_VALIDATE_INT) || $edad <= 0) {
        $errores[] = "La edad debe ser un número entero positivo.";
    }

    // Mostrar errores
    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    } else {
        echo "<p style='color: green;'>Datos válidos y listos para procesar.</p>";
    }
}



