<?php

foreach($details as $inf){?>
    <div class ="productDetails">
        <img src="../img/close.png" class ="closedetail" onclick="cambia()"></>
    <h1> <?php echo $inf['nom'] ?></h1>
    <img class="imageDesing" src="../img/<?php echo $inf['imatge'];?>"/>
    <p class="details"> <?php echo $inf['descripcio'] ?></p>
    <p class="preu"> <?php echo "Precio: " . $inf['preu'] . " € "?></p>
    <input type="hidden" id="producte" value="<?php echo $_GET['id'] ?>" />
    <input class="botonDetail" type="button" value="Añadir al Carrito" onclick="addToCart()" /></div><?php
}

?>