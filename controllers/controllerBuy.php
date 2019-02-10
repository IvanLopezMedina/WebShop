<?php
if (!empty($_SESSION["id"])) {
    require_once(__DIR__ . '/navcontroller.php');
    require_once(__DIR__ . '/../models/connectaBD.php');
    $conn = connectaDB();

    if ($_SESSION['hay']) {
        require_once(__DIR__ . '/../models/loadBuyProduct.php');
        $products = loadProducts($conn);
        insertBuyProducts($products,$conn);

        $_SESSION['producte']="no";
        unset($_SESSION['producte']);
        $_SESSION['hay']="no";
        unset($_SESSION['hay']);
    }

    require_once(__DIR__ . '/footercontroller.php');

}else header("Location: http://tdiw-n4.deic-docencia.uab.cat");
?>