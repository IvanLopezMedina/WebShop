<?php
    function loadCart($conn,$name){

        $sql = "SELECT id_producte, nom, preu, imatge
                            FROM Producte
                            WHERE id_producte='$name'";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $products = $stmt->fetchAll();

        return $products;
    }

