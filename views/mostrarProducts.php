<?php
    if($products==null){
        ?>
        <div id="grid">

        </div>
        <?php
    }else {
        ?>
        <div id="grid" class="<?php echo $name; ?>">
            <?php
            foreach ($products as $producto) {
                ?>
                <section class="productDesing" onclick='clickProducto(this)' name="<?php echo $producto['id_producte']; ?>">
                    <article><h1><?php echo $producto['nom']; ?></h1></article>
                    <article><img class="imageDesing" src="../img/<?php echo $producto['imatge']; ?>"></article>
                </section>
                <?php
            }
            ?>
        </div>
        <?php
    }
?>