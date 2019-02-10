<?php

function consultaProducts($conn,$name){
    $sql = "SELECT p.id_producte, p.nom, p.preu, p.marca, p.actiu, p.descripcio, p.imatge, p.fk_subCategoria, sub.comuCategoria
                    FROM Producte p, Subcategoria sub
                    WHERE p.fk_subCategoria=sub.id_subCategoria and sub.comuCategoria='CamisetasHombre'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll();

    return $products;
}
?>