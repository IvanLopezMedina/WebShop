<?php

function loginUser($conn,$correu,$pwd){
    $sql = "Select * from Usuari where correu = :correu";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':correu', $correu, PDO::PARAM_STR,20);
    $stmt->execute();

    $dadeslogin = $stmt->fetchAll();
    $epwd = "";
    foreach ($dadeslogin as $dades){
        $epwd = $dades['password'];
    }

    if (password_verify($pwd, $epwd)) {
        $_SESSION["correu"]=$correu;
        $_SESSION["pwd"]=$pwd;
        $_SESSION["id"]=session_id();
        ?> <script>window.location.replace("/")</script> <?php
    } else {
        echo 'Invalid password.';
    }
}

?>
