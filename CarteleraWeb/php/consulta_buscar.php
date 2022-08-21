<?php
include "conexion.php";
$buscar = $_GET["id_buscar"];

    $cmd = "SELECT * FROM carteleraweb where titulo LIKE '%$buscar%'";
    $cmd = Conexion::connect()-> prepare($cmd);
    $done = $cmd -> execute();
    $listas = $cmd -> fetchAll();

?>