<?php

class demoStaticic{

    public $nombre;

    public static function demoStaticic(){
        echo "Esto es un metodo statico Y NO SOY OBJETO";
    }

    public function asignarNombre($nombre){
        echo "My name is: ".$this->nombre = $nombre;
    }


}

demoStaticic::demoStaticic();
$obj1 = new demoStaticic();
echo "<br>";
echo "<br>";
$obj1->asignarNombre("Juan Y SOY UN OBJETO");



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h2>CLASES Y OBJETOS : METODOS ESTATICOS</h2>
</body>
</html>