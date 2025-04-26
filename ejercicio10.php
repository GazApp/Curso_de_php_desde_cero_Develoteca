<?php

if($_POST){
 $valor_A = $_POST['valorA'];
 $valor_B = $_POST['valorB'];

 if (($valor_A != $valor_B) && ($valor_A < $valor_B)){
ECHO "Los valores no coinciden y el valor A es menor que el valor B.";
 }else{
     echo "Los valores no coinciden y el valor A es mayor que el valor B.";
 }



}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>
</head>
<body>
<h2>Operadores  Logicos</h2>

<form action="ejercicio10.php" method="post">
<h2>Valor A:</h2>
<input type="text" name="valorA" id="">
<br/>


<h2>Valor B:</h2>
<input type="text" name="valorB" id="">

<br/>
<br/>


<input type="submit" value="Calulate">
</form>

</body>
</html>


