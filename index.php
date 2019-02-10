<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    if (isset($_GET['accio'])){
        $action = $_GET['accio'];
    } else {
        $action = null;
        //include __DIR__ .'/controllers/navcontroller.php';
    }

    switch ($action) {
        case 'llistar-categories':
            include __DIR__.'/controllers/controllerLlistarCategories.php';
            break;
        case 'llistar-productes':
            include __DIR__.'/controllers/controllerLlistarProducts.php';
            break;
        case 'click-subcategoria':
            include __DIR__.'/controllers/controllerProducts.php';
            break;
        case 'add-to-cart':
            include __DIR__.'/controllers/controllerCart.php';
            break;
        case 'load-product-details':
            include __DIR__.'/controllers/controllerLoadProductDetails.php';
            break;
        case 'load-product':
            include __DIR__.'/controllers/controllerProducts.php';
            break;
        case 'delete-session':
            include __DIR__.'/controllers/controllerSession.php'; //Delete all cart
            break;
        case 'load-menu-options':
            include __DIR__.'/controllers/controllerMenuOptions.php';
            break;
        case 'account':
            include __DIR__.'/controllers/controllerUserAccount.php';
            break;
        case 'orders':
            include __DIR__.'/controllers/controllerOrders.php';
            break;
        case 'comprar':
            include __DIR__.'/controllers/controllerBuy.php';
            break;
        case 'mostrarComanda':
            include __DIR__.'/controllers/controllerOrders.php';
            break;
        case 'login':
            //include __DIR__ .'/controllers/navcontroller.php';
            include __DIR__.'/controllers/controllerRegistreUsuari.php';
            //include __DIR__ .'/controllers/footercontroller.php';
            break;
        case 'logout':
            include __DIR__.'/logout.php';
            break;
        default:
            include __DIR__.'/controllers/controllerInicio.php';
            break;
    }

    if (!isset($_GET['accio'])) {
        //include __DIR__ . '/controllers/footercontroller.php';
    }




?>


