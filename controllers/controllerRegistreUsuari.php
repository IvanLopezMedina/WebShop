<?php
require_once(__DIR__ .'/navcontroller.php');
require_once(__DIR__.'/../models/connectaBD.php');
$conn = connectaDB();

require_once(__DIR__ . '/../views/viewLoginRegistre.php');
//$resultat = consulta($connexio);

if(isset($_POST["nom"]) && isset($_POST["callereg"]) && isset($_POST["correoreg"]) && isset($_POST["passwordreg"])
    && isset($_POST["postalreg"]) && isset($_POST["poblacioreg"])){

    $nom = $_POST["nom"];
    $correu = $_POST["correoreg"];
    $pwd = password_hash($_POST["passwordreg"], PASSWORD_BCRYPT);
    $calle = $_POST["callereg"];
    $codipostal = $_POST["postalreg"];
    $poblacio = $_POST["poblacioreg"];

    require_once(__DIR__.'/../models/registerNewUser.php');
    registreNewUser($conn,$nom,$correu,$pwd,$calle,$codipostal,$poblacio);

}

if(isset($_POST["correolog"]) && isset($_POST["passwordlog"])){

    $correu = $_POST["correolog"];
    $pwd = $_POST["passwordlog"];

    require_once(__DIR__.'/../models/loginUser.php');
    loginUser($conn,$correu,$pwd);

}

require_once(__DIR__ .'/footercontroller.php');

?>