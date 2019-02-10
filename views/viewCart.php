<?php


function showX(){
    ?>
    <form id="delete" method="post">
        <input onclick="deleteSession()" name="eliminar" class="botonEliminar" type="button" value="Vaciar Carrito">
    </form>
    <?php
}


function showCartProduct($products,$item){
    $precioTotal = 0;

    foreach ($products as $producto) {

        $precioTotal += $producto['preu'] * $_SESSION[$producto['id_producte'] . 'c'];;
        ?>
        <li id="<?php echo $item; ?>" class="productoCarrito">
            <span class="nom"><?php echo $producto['nom']; ?></span>
            <img class="imatge" src="../img/<?php echo $producto['imatge']; ?>">
            <input onclick="numberProduct(this,<?php echo $item; ?>)" type="button" class="resta" value="-">
            <span id="unidades<?php echo $item; ?>"><?php echo $_SESSION[$item . 'c']; ?></span>
            <input onclick="numberProduct(this,<?php echo $item; ?>)" type="button" class="suma" value="+">
            <span class="preu"><?php echo $producto['preu'] * $_SESSION[$item . 'c'] . "€"; ?></span>
        </li>
        <?php
    }
    return $precioTotal;
}

function showButtonBuyCart($precioTotal){?>
    </ul>
    <form id="formPagar" method="post" action="/?accio=orders">
        <p class="totalPrice" value="<?php echo $precioTotal; ?>"> Subtotal: <span class="valuePrice"><?php echo $precioTotal; ?></span> €</p>

        <input onclick="preu()" name="comprar" class="botonComprar" type="submit" value="Comprar">
    </form>
    <?php
}


