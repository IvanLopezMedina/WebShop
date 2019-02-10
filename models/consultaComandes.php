<?php
    function comandes($conn,$id){
        $sql = "SELECT id_comanda, data_creacio, numero_elements, import_total
                        FROM Comanda
                        WHERE fk_usuari=".$id;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $comandes = $stmt->fetchAll();

        return $comandes;
    }

    function lineaComandes($conn,$idComanda){
        $sql = "SELECT c.data_creacio, p.nom, l.quantitat, l.preutotal, l.fk_producte
                            FROM LineaComandes l, Comanda c, Producte p
                            WHERE l.fk_comanda = c.id_comanda AND l.fk_producte = p.id_producte AND fk_comanda=".$idComanda;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $lineaComandes = $stmt->fetchAll();

        return $lineaComandes;
    }


    function getNomProducte($conn,$fk_producte){
        $sql = "SELECT nom
                        FROM Producte
                        WHERE id_producte=".$fk_producte;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $productes = $stmt->fetchAll();

        foreach ($productes as $producte){
            $nom = $producte['nom'];
        }

        return $nom;
    }




