<?php

class persona{
public $nombre;
private $edad;

public function asignarNombre($nombre){
$this->nombre = $nombre;
}
public function imprimirNombre(){

echo "Hola mi nombre es: ".$this->nombre;
}

public function asignarEdad($edad){
   echo "Mi edad es:".$this->edad = $edad;
}
}



$persona1 = new persona();
$persona2 = new persona();
$persona1 ->asignarNombre("Aldo");
$persona2 ->asignarNombre("Francisco");
//$persona1 ->asignarEdad(18);
//$persona1 ->asignarEdad(55);



echo "<br>";
$persona2 ->imprimirNombre();
echo "<br>";
$persona1->asignarEdad(55);
echo "<br>";
$persona1->imprimirNombre();
echo "<br>";
$persona2->asignarEdad(18);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h2>CLASES Y OBJETOS : PRIVATE</h2>
</body>
</html>


