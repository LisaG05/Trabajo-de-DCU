<?php

include '../model/autoload.php';

    if (isset($_POST['inicio'])):
        echo Insert::inicio($_POST['user'],$_POST['pass']);
    endif;
    if (isset($_POST['save'])):
        echo Insert::save($_FILES['portada'],$_POST['titulo'],$_POST['directores'],$_POST['actor'],$_POST['fecha'],$_POST['trailer'],$_POST['resumen'],$_POST['categoria']);
    endif;
    if(isset($_POST['update'])):
        echo Insert::update($_POST['id'],$_POST['titulo'],$_POST['directores'],$_POST['actor'],$_POST['fecha'],$_POST['trailer'],$_POST['resumen'],$_POST['categoria']);
    endif;
    if(isset($_GET['delete'])):
        echo Insert::delete($_GET["id"]);
    endif;

?>