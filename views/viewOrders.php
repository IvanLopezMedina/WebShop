<?php ?>
<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="../js/validationRegister.js">
<link rel="stylesheet" href="../js/clickSubcategory.js">
<div id="grid">
    <section id="orders" style="grid-area:reg">
        <h3 class="titulo" >Pedidos, clicar para ver</h3>
        <table class="info">
            <tr>
                <th> Numero de pedido </th>
                <th> Objetos </th>
                <th> Precio </th>
            </tr>
            <?php
                if($comandes!=NULL){
                    foreach ($comandes as $comanda){
                        ?>
                        <tr id="<?php echo $comanda['id_comanda'] ?>" class="comanda" onclick="mostrarComanda(this)">
                            <td> <?php echo "100".$comanda['id_comanda'] ?> </td>
                            <td>
                                <?php
                                        if($comanda['numero_elements']==1){
                                            echo $comanda['numero_elements']." elemento";
                                        }else{
                                            echo $comanda['numero_elements']." elementos";
                                        }
                                ?>
                            </td>
                            <td> <?php echo $comanda['import_total']." €" ?> </td>
                        </tr>
                        <?php
                    }
                }else{
                    ?>
                        <tr id="borra" class="comanda">
                            <td> - </td>
                            <td> - </td>
                            <td> - </td>
                        </tr>
                    <?php
                }
            ?>
        </table>
    </section>

    <section id="order" style="grid-area:log">
        <h3 class="titulo"> Informacion del pedido </h3>
        <table id="añade" class="info">
            <tr>
                <th> Data </th>
                <th> Producto </th>
                <th> Precio </th>
                <th> Cantidad </th>
                <th> Total </th>
            </tr>
            <tr class="comanda">
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
            </tr>

        </table>
    </section>
</div>

