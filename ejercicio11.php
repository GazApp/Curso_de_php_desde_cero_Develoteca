<?php

    if ($_POST) {
     $boton = $_POST["btn"];

     switch ($boton) {
         case '1': echo "Boton 1 Presionado";
         break;
         case '2': echo "Boton 2 Presionado";
         break;
         case '3': echo "Boton 3 Presionado";
         break;
         case '4': echo "Boton 4 Presionado";
         break;
         case '5': echo "Boton 5 Presionado";
         break;
     }
    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sw</title>
</head>
<body>
<h2>Swicht</h2>
<br>
<br>
<form action="ejercicio11.php" method="post">

    <input type="submit" name="btn" value="1">
    <br>
    <br>
    <input type="submit" name="btn" value="2">
    <br>
    <br>
    <input type="submit" name="btn" value="3">
    <br>
    <br>
    <input type="submit" name="btn" value="4">
    <br>
    <br>
    <input type="submit" name="btn" value="5">
</form>


</body>
</html>