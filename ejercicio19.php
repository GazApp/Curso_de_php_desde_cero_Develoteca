<?php

$frutas = array("fresa","manzana","platano", "pera", "mango");
$fruta = array("fresas","manzanas","platanos", "peras", "mangos");


foreach($frutas as $frutas){
    echo $frutas."<br/>";
}
echo "<br/>";
echo "<br/>";

for($i = 0; $i < count($fruta); $i++){
    echo $fruta[$i]."<br/>";
}

echo "<br/>";
echo "<br/>";

print_r($fruta);
