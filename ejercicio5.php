<?php

if($_POST ){
    $nombre=$_POST["txtNombre"];
    $apellido=$_POST["txtApellido"];
    echo "Hola ".$nombre . " " . $apellido;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1>PhP Develoteca</h1>
<br>
<form action="ejercicio5.php" method="post">
    Nombre
    <input type="text" name="txtNombre" id="">
    <br>
    <br>
    Apellido
    <input type="text" name="txtApellido" id="">
    <br>

    <br>
    <input type="submit" value="Enviar">
</form>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</body>
</html>