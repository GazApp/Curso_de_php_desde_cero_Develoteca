<?php

//Para mantener informacion mientras el navegador esta abierto:
session_start();

$_SESSION["user"] = "GAZAPP";
$_SESSION["status"] = "LOGUEADO";

echo "Sesion iniciada";
echo "<br>";
echo "<br>";
echo "USUARIO: ".$_SESSION["user"]."--"."ESTATUS: ".$_SESSION["status"];


/**
 *
 */