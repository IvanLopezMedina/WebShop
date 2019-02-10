<?php

function registreNewUser($conn,$nom,$correu,$pwd,$calle,$codipostal,$poblacio){

    $sql = "Insert into Usuari (nom,correu,password,calle,codipostal,poblacio) values (:nom,:correu,:password,:calle,:codipostal,:poblacio)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nom', $nom, PDO::PARAM_STR,20);
    $stmt->bindParam(':correu', $correu, PDO::PARAM_STR,20);
    $stmt->bindParam(':password', $pwd, PDO::PARAM_STR,100);
    $stmt->bindParam(':calle', $calle, PDO::PARAM_STR,100);
    $stmt->bindParam(':codipostal', $codipostal, PDO::PARAM_STR,20);
    $stmt->bindParam(':poblacio', $poblacio, PDO::PARAM_STR,20);
    $stmt->execute();
}

?>
