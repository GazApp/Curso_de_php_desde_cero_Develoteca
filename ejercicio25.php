<?php
class persona
{
    public $nombre;
    private $edad;

    /**
     * @param $edad
     * @param $nombre
     */
    public function __construct($edad, $nombre)
    {
        $this->edad = $edad;
        $this->nombre = $nombre;
    }

    public function imprimirNombreEdad()
    {
        echo "Hola mi nombre es: " . $this->nombre;
        echo "<br>";
        echo "Hola mi edad es: " . $this->edad;
    }

}
$persona1= new persona(54, "GazApp");

$persona1->imprimirNombreEdad();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h2>CLASES Y OBJETOS : CONSTRUCTOR</h2>
</body>
</html>