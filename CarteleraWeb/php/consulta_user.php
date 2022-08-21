<?php
include "conexion.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = "";
}
if (isset($_GET['categoria'])) {
    $categoria = $_GET['categoria'];
} else {
    $categoria = "";
}

if($id !=='') {
    $cmd = "SELECT * FROM carteleraweb where id ='$id'";
    $cmd = Conexion::connect()-> prepare($cmd);
    $done = $cmd -> execute();
    $listas = $cmd -> fetchAll();
}elseif ($categoria !==""){
    $cmd = "SELECT * FROM carteleraweb where categoria ='$categoria'";
    $cmd = Conexion::connect()-> prepare($cmd);
    $done = $cmd -> execute();
    $listas = $cmd -> fetchAll();
}else{
    $cmd = "SELECT * FROM carteleraweb ORDER BY id DESC";
    $cmd = Conexion::connect()-> prepare($cmd);
    $done = $cmd -> execute();
    $listas = $cmd -> fetchAll();
}
?>