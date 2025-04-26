<?php
class persona
{
    public $nombre;
    private $edad;

    public function asignarNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function imprimirNombre()
    {

        echo "Hola mi nombre es: " . $this->nombre;
    }

    public function asignarEdad($edad)
    {
        echo "Mi edad es:" . $this->edad = $edad;
    }
}

class hr extends persona{
    public $puesto;

    public function asignarPuesto($puesto){
   echo "EL puesto es:".$this->puesto = $puesto;
    }
}


$persona1 = new persona();
$persona2 = new persona();
$persona3 = new hr();
$persona1->asignarNombre("Aldo");
$persona2->asignarNombre("Francisco");
$persona3->asignarNombre("Juan Hr");
//$persona3->asignarPuesto("Developer");

echo "<br>";
$persona2->imprimirNombre();
echo "<br>";
$persona1->asignarEdad(55);
echo "<br>";
$persona1->imprimirNombre();
echo "<br>";
$persona2->asignarEdad(18);
echo "<br>";

//class hr extends persona:
echo "<h2>HERENCIA</h2>";
$persona3->imprimirNombre();
echo "<br>";
$persona3->asignarEdad(60);
echo "<br>";
$persona3->asignarPuesto("Developer ");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h2>CLASES Y OBJETOS : HERENCIA</h2>
</body>
</html>