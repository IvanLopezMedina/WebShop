<?php

function consultaCategoria($conn){

    $sql = 'SELECT id_categoria, `nom` FROM Categoria';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $categories = $stmt->fetchAll();

    return $categories;
}

?>