<?php

if($_POST){
 $valor_A = $_POST['valorA'];
 $valor_B = $_POST['valorB'];

 if($valor_A > $valor_B){
   echo "El Valor A es mayor al Valor de B.";
 }elseif ($valor_A < $valor_B){
     echo "El Valor A es  menor al Valor de B.";
    }elseif ($valor_A == $valor_B){
     echo "El Valor A es igual a Valor de B.";
    }elseif ($valor_A != $valor_B){
     echo "Los valores no coinciden.";
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
<h2>Operadores Condicionales</h2>

<form action="ejercicio9.php" method="post">
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


