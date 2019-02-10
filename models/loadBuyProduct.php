<?php
    function loadProducts($conn){

        $sql = "SELECT id_producte, nom, preu, marca, actiu, descripcio, imatge
                                FROM Producte";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll();

        return $products;
    }



    function getIdUser($conn){
        $correu = $_SESSION['correu'];
        $sql = "SELECT id 
                        FROM Usuari
                        WHERE correu = '$correu'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $usuari = $stmt->fetchAll();

        foreach ($usuari as $user){
            $id = $user['id'];
        }

        return $id;
    }

    function getComandaId($conn){
        $sql = "SELECT * 
                        FROM Comanda order by id_comanda desc limit 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $comandas = $stmt->fetchAll();

        foreach ($comandas as $comanda){
            $id = $comanda['id_comanda'];
        }

        return $id;
    }



    function insertBuyProducts($products,$conn){
        $numeroElements = 0;
        $quantitatProducte = 0;

        foreach ($products as $product){
            if(isset($_SESSION['producte'][$product['id_producte']])){
                $numeroElements = $numeroElements +1;
            }
        }

        $preuTotal = $_GET['preuTotal'];
        $fecha = date('Y-m-d');
        $userID = getIdUser($conn);
        if($numeroElements>0) {
            insertComanda($conn, $fecha, $numeroElements, $preuTotal, $userID);

            foreach ($products as $product) {
                if (isset($_SESSION['producte'][$product['id_producte']])) {
                    $quantitatProducte = $_SESSION[$product['id_producte'] . 'c'];
                    $preuProducte = $product['preu'] * $quantitatProducte;
                    $numeroElements = $numeroElements + 1;
                    $comandaID = getComandaId($conn);
                    $productID = $product['id_producte'];

                    insertLineaComanda($conn, $quantitatProducte, $preuProducte, $comandaID, $productID);
                }
            }
        }

    }



    function insertComanda($conn,$fecha,$numeroElements,$preuTotal,$userID){
        $sql = "INSERT INTO Comanda (data_creacio,numero_elements,import_total,fk_usuari) VALUES (:fecha,:numeroElements,:preuTotal,:userID)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':fecha', $fecha, PDO::PARAM_STR,20);
        $stmt->bindParam(':numeroElements', $numeroElements, PDO::PARAM_STR,20);
        $stmt->bindParam(':preuTotal', $preuTotal, PDO::PARAM_STR,100);
        $stmt->bindParam(':userID', $userID, PDO::PARAM_STR,100);
        $stmt->execute();
    }

    function insertLineaComanda($conn,$quantitatProducte,$preuProducte,$comandaID,$productID){

        $sql = "INSERT INTO LineaComandes (quantitat,preuTotal,fk_comanda,fk_producte) VALUES (:quantitatProducte,:preuProducte,:comandaID,:productID)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':quantitatProducte', $quantitatProducte, PDO::PARAM_STR,20);
        $stmt->bindParam(':preuProducte', $preuProducte, PDO::PARAM_STR,20);
        $stmt->bindParam(':comandaID', $comandaID, PDO::PARAM_STR,100);
        $stmt->bindParam(':productID', $productID, PDO::PARAM_STR,100);
        $stmt->execute();
    }

