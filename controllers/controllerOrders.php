<?php
if (!empty($_SESSION["id"])) {

    require_once(__DIR__.'/../models/connectaBD.php');
    $conn = connectaDB();
    require_once(__DIR__.'/../models/consultaComandes.php');
    require_once(__DIR__.'/../models/loadBuyProduct.php');

    $id = getIdUser($conn);
    $comandes = comandes($conn,$id);

    if(isset($_GET['idComanda'])){
        $idComanda = $_GET['idComanda'];
        $lineaComandes = lineaComandes($conn,$idComanda);

        require_once(__DIR__ . '/../views/viewInfoOrder.php');

    }else{
        require_once(__DIR__ .'/navcontroller.php');
        require_once(__DIR__ . '/../views/viewOrders.php');
        require_once(__DIR__ .'/footercontroller.php');
    }

}else header("Location: http://tdiw-n4.deic-docencia.uab.cat");
?>