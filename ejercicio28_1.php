<?php
session_start();

if(isset( $_SESSION["user"])) {
    echo "Sesion Iniciada :"."<br>";
    echo "USUARIO: " . $_SESSION["user"] . "    ".
        "  2º PAGE" ."   " . "ESTATUS: " . $_SESSION["status"];
}else{
    echo "Session Finalizada por Destroy";
}