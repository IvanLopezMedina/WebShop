<?php
    if (!empty($_SESSION["id"])){

        createSessionProduct();

        if (isset($_GET['opera']) && isset($_GET['identificador'])){
            addRemoveProducts();
        } else {
            createViewScroll();
        }

    }else{
        echo "<li>Has de fer Login per afegir productes</li>";
    }



    function createSessionProduct(){
        error_reporting(0);
        $idproducte = $_GET['id'];
        if(isset($_GET['id'])){
            $_SESSION['hay']="si";
        }

        if (!empty($_SESSION['producte'][$idproducte])) {
            $_SESSION[$idproducte . 'c'] = $_SESSION[$idproducte . 'c'] + 1;
        } else {
            $_SESSION['producte'][$idproducte] = $idproducte;
            $_SESSION[$idproducte . 'c'] = 1;
        }
        error_reporting(1);
    }

    function addRemoveProducts(){
        $opera = $_GET['opera'];
        $identificador = $_GET['identificador'];
        switch($opera){
            case "1":
                $_SESSION[$identificador . 'c'] = $_SESSION[$identificador . 'c'] + 1;
                break;
            case "0":
                $_SESSION[$identificador . 'c'] = $_SESSION[$identificador . 'c'] - 1;
                if ($_SESSION[$identificador . 'c'] <= 0){
                    unset($_SESSION[$identificador . 'c']);
                    unset($_SESSION['producte'][$identificador]);
                }
                break;
        }
    }

    function createViewScroll(){
        require_once(__DIR__ . '/../models/connectaBD.php');
        require_once(__DIR__ . '/../models/addProductToCart.php');
        require_once(__DIR__ . '/../views/viewCart.php');
        if (sizeof($_SESSION['producte']) > 1 ) {
            showX();
        } else echo "Cesta vacia";
        ?>

        <ul class="scroll">
            <?php
            $precioTotal = 0;

            foreach ($_SESSION['producte'] as $item) {
                $conn = connectaDB();
                $products = loadCart($conn, $item);
                $precioTotal += showCartProduct($products, $item);
            }


            if (sizeof($_SESSION['producte']) > 1 ) {
                showButtonBuyCart($precioTotal);
            }

        }
?>
