<?php

if($_POST){
 $valor_A = $_POST['valorA'];
 $valor_B = $_POST['valorB'];

 $suma = $valor_A + $valor_B;
 $resta = $valor_A - $valor_B;
 $mpx = $valor_A * $valor_B;
 $div = $valor_A / $valor_B;
 $sub = $valor_A % $valor_B;

 echo $suma;
 echo "<br>";
 echo $resta;
 echo "<br>";
 echo $mpx;
 echo "<br>";
 echo $div;
 echo "<br>";
 echo $sub;

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
<h2>Operadores Aritmeticos</h2>

<form action="ejercicio8.php" method="post">
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


