<?php

class persona{
    public $nombre;

    public function asignarNombre($nombre){
            $this->nombre = $nombre;
        }
 public function imprimirNombre(){

    echo "Hola mi nombre es: ".$this->nombre;
}
}



$persona1 = new persona();
$persona2 = new persona();
$persona1 ->asignarNombre("Aldo");
$persona2 ->asignarNombre("Francisco");
echo $persona1->nombre;
echo "<br>";
$persona2 ->imprimirNombre();
echo "<br>";
$persona1->imprimirNombre();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h2>CLASES Y OBJETOS</h2>
</body>
</html>
