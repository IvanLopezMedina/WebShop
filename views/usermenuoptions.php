<?php


if (empty($_SESSION['id'])){
    ?>
    <li id ="loginmenu" class="menuitem"><a id="clickLogin" href="../?accio=login" style="z-index: 1">Login</a></li><?php
}else {
    ?>
    <li id ="settingmenu"class="menuitem"><a id="settings" href="../?accio=account">Cuenta</a></li>
    <li id ="pedidomenu"class="menuitem"><a id="pedidos" href="../?accio=orders">Pedidos</a></li>
    <li id ="logoutmenu" class="menuitem"><a id="logout" href="../?accio=logout">Logout</a></li>
    <?php

}

?>

