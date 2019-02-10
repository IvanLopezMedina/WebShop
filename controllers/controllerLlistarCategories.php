<?php
require_once(__DIR__ .'/navcontroller.php');

    require_once(__DIR__.'/../models/connectaBD.php');
    $conn = connectaDB();

    if (isset($_GET['id'])){
        $name = $_GET['id'];
        require_once(__DIR__.'/../views/header.php');
        require_once(__DIR__.'/navcontroller.php');//
        ?>
        <div id="grid">
        <?php
            require_once(__DIR__.'/../models/loadCategories.php');
        ?>
        </div>
        <?php
    }
require_once(__DIR__ .'/footercontroller.php');



?>