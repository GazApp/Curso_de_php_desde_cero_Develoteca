<?php

$fruta = array("fresas","manzanas","platanos", "peras", "mangos");

array_push($fruta,"uva");

array_push($fruta,"mango");

foreach($fruta as $i){
    echo $i."<br/>";
}