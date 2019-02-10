<?php
    require_once(__DIR__ .'/navcontroller.php');
    require_once(__DIR__.'/../models/connectaBD.php');

    $conn = connectaDB();

    require_once(__DIR__.'/../models/consultaProducts.php');

    if (isset($_GET['subcategoria'])){
        $name = $_GET['subcategoria'];
    }else{
        $name = null;
    }

    $products = consultaProducts($conn,$name);

    require_once(__DIR__.'/../views/mostrarProducts.php');
    require_once(__DIR__ .'/footercontroller.php');
?>