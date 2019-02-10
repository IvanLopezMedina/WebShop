<?php

function consultaUsuari($conn, $correu){
    $sql = 'Select nom, correu, calle, codipostal, poblacio, avatar from Usuari where correu = :correu';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':correu', $correu, PDO::PARAM_STR,20);
    $stmt->execute();
    $userDetails = $stmt->fetchAll();

    return $userDetails;
}

function updateUser($conn, $correu, $novesDades){
    $sql = 'update Usuari set nom = :nom , calle = :calle ,codipostal = :codipostal ,poblacio = :poblacio where correu = :correu';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nom', $novesDades['nom'], PDO::PARAM_STR,100);
    $stmt->bindParam(':calle', $novesDades['calle'], PDO::PARAM_STR,100);
    $stmt->bindParam(':codipostal', $novesDades['codipostal'], PDO::PARAM_STR,20);
    $stmt->bindParam(':poblacio', $novesDades['poblacio'], PDO::PARAM_STR,20);
    $stmt->bindParam(':correu', $correu, PDO::PARAM_STR,20);
    $stmt->execute();

}

function setAvatar($conn, $correu, $imagepath){
    $sql = 'update Usuari set avatar = :avatar where correu = :correu';
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':avatar', $imagepath, PDO::PARAM_STR,50);
    $stmt->bindParam(':correu', $correu, PDO::PARAM_STR,20);
    $stmt->execute();

}

?>