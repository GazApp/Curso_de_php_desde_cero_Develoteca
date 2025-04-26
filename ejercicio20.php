<?php

$frutas=array("f" =>"fresa","m"=>"manzana","p"=>"pera");

print_r($frutas);
echo "<br/>";
print_r($frutas["m"]);



echo "<br/>";
echo "<br/>";

$fruta = array("fresas","manzanas","platanos", "perassss", "mangossss");
foreach($fruta as $indice){
    echo $indice."<br/>";
}

echo "<br/>";
echo "<br/>";

$capitales = ["México" => "DF", "España" => "Madrid"];
foreach ($capitales as $pais => $capital) {
    echo "La capital de $pais es $capital.<br>";
}

echo "<br/>";
echo "<br/>";

$productos = [
    "A0001" => "Mouse",
    "A0002" => "Teclado",
    "A0003" => "Monitor"
];

echo "<table border='2'>";
echo "<tr><th>Código</th><th>Producto</th></tr>";
foreach ($productos as $codigo => $producto) {
    echo "<tr><td>$codigo</td><td>$producto</td></tr>";
}
echo "</table>";

echo "<br/>";
echo "<br/>";
foreach ($productos as $codigo => $producto) {
    echo $codigo."<br/>";
}
echo "<br/>";
echo "<br/>";

foreach ($productos as $codigo => $producto) {
    echo $producto."<br/>";
}