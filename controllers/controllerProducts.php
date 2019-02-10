<?php
    require_once(__DIR__.'/../models/connectaBD.php');

    $conn = connectaDB();

    require_once(__DIR__.'/../models/loadCategories.php');

    if (isset($_GET['id'])){
        $name = $_GET['id'];
    }else{
        $name = null;
    }

    $products = consultProducts($conn,$name);

    require_once(__DIR__.'/../views/mostrarProducts.php');
?>