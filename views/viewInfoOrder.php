<tr>
    <th> Data </th>
    <th> Producto </th>
    <th> Precio </th>
    <th> Cantidad </th>
    <th> Total </th>
</tr>
<?php
    foreach ($lineaComandes as $lineaComanda){?>
        <tr class="comanda">
            <td> <?php echo $lineaComanda['data_creacio'] ?> </td>
            <td> <?php echo $lineaComanda['nom'] ?> </td>
            <td>
                <?php
                    $precio = $lineaComanda['preutotal']/$lineaComanda['quantitat'];
                    echo $precio." €/u";
                ?>
            </td>
            <td>
                <?php
                    if($lineaComanda['quantitat']==1){
                        echo $lineaComanda['quantitat']." unidad";
                    }else{
                        echo $lineaComanda['quantitat']." unidades";
                    }
                ?>
            </td>
            <td> <?php echo $lineaComanda['preutotal']." €" ?> </td>
        </tr>
    <?php
    }
?>




