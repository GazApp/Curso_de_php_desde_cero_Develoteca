<?php
//Recibiendo informacion de este formulario HTML(Metodo  POST)
if($_POST){
    $nombre=$_POST["txtNombre"];
    echo "Hola ".$nombre;
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
    <div class="input-group mb-3">
        <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
        <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
    </div>
    <br>
    <br>
    <form action="ejercicio2.php" method="post">
    Nombre
    <input type="text" name="txtNombre" id="">
    <br>
    <input type="submit" value="Enviar">
</form>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</body>
</html>