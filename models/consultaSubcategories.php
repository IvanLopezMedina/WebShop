<?php

function consultaSubcategoria($conn){
    $sql = 'SELECT id_subcategoria, comuCategoria, nom, fk_categoria FROM Subcategoria';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $subCategories = $stmt->fetchAll();

    return $subCategories;
}

?>