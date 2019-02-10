<nav class ="nav">
    <ul >
        <?php
        foreach ($categories as $categoria){?>
            <li class="dropdown">
            <a><?php echo $categoria['nom']; ?></a>
            <div class="dropdown-content"><?php
            foreach ($subCategories as $subCategoria){
                $comuCategoria = $subCategoria['comuCategoria'];
                if($subCategoria['fk_categoria'] == $categoria['id_categoria']){?>
                    <!-- <a onclick="clickSub('<?php echo $comuCategoria; ?>')" id="<?php echo $comuCategoria; ?>" class="nameSubcategory"> <?php echo $subCategoria['nom']; ?> </a>-->
                    <a onclick="clickSub(this)" name="<?php echo $comuCategoria; ?>" id="<?php echo $comuCategoria; ?>" class="nameSubcategory"> <?php echo $subCategoria['nom']; ?> </a>
                <?php
                }
            }?></div></li><?php
        }?>
    </ul>
</nav>

