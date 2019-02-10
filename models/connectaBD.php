<?php

function connectaDB(){
    require(__DIR__.'/../config.php');
    try {
        //$conn = new PDO( 'mysql:host='. $databaseHost . ' ;dbname='.$databaseName.';port=3306;charset=utf8mb4, '.$databaseUser.', '.$databasePassword);
        $conn = new PDO( 'mysql:host='.$databaseHost.';dbname='.$databaseName.';port=3306;charset=utf8mb4', ''.$databaseUser.'', ''.$databasePassword.'' );
        $conn->exec("set names utf8");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

    return $conn;
}

