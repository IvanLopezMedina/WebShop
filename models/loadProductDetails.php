<?php
function loadDetails($conn){
    require_once(__DIR__.'/connectaBD.php');
    $conn = connectaDB();
    $sql = "SELECT * from Producte where id_producte = ".$_GET['id'];
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $details = $stmt->fetchAll();

    return $details;
}



?>
