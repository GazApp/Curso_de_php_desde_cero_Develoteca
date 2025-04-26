<?php

$server = "127.0.0.1";
$user = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$server;dbname=album", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo " *** Conexion Exitosa *** ";
    echo "<br>";
    echo "<br>";



    /*** PARA INSERCION DE DATOS:
     * $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Foto Java', 'Foto_java.png')";
       $connection->exec($sql);
     */

    $sql = "SELECT * FROM fotos";

    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach ($result as $row) {
        echo "<br>";
        echo  $row["id"]    . "|". "\n";
        echo  $row["nombre"]. "|" . "\n";
        echo  $row["ruta"]  . "|" . "\n";

        //echo '<br/>';
    }

}catch (Exception $e){

    echo "Conexion No Exitosa !!!".$e->getMessage();
}


