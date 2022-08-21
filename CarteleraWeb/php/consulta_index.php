<?php
include 'conexion.php';

$cmd = "SELECT * FROM carteleraweb ORDER BY id DESC";
$cmd = Conexion::connect()-> prepare($cmd);
$done = $cmd -> execute();
$listas = $cmd -> fetchAll();
?>