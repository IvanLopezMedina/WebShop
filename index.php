<?php /*
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Sulu Sport </title>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/dropdown.css">
    </head>
    <body>
    <?php include 'views/header.php'; ?>

        <div id="inicio">
            <section id="slider1">
                <img id="globoRojo" class="globosCarousel" src="img/ropa-banner.jpg">
                <img id="globoAzul" class="globosCarousel" src="img/accesorios-banner.jpg">
                <img id="globoVerde" class="globosCarousel" src="img/suplementos-banner.png">
            </section>


            <section class="informacion">
                <h1> <b> SURU VOLADOR  </b></h1>
                <p> Son las mejores del mercado! Le quitamos el jack al iphone para venderte un adaptador solamente por 49.95€ que puedes añadirlo al boton de carga y funciona como jack, carga y a demas... tiene un boton para ir a inicio! (El X no tiene boton, regalamos este boton!!) Solo por 49.95€.</p>
            </section>

            <section id="slider2">
                <img id="pelotaRoja" class="pelotasCarousel" src="img/globoAzul.jpg">
                <img id="pelotaAzul" class="pelotasCarousel" src="img/globoRojo.jpg">
                <img id="pelotaBlanca" class="pelotasCarousel" src="img/globoVerde.jpg">
            </section>

            <section id="info1" class="informacion">
                <h1> Compranos esto s'hurmano que esta to gupao </h1>
                <p> Son las mejores del mercado! Le quitamos el jack al iphone para venderte un adaptador solamente por 49.95€ que puedes añadirlo al boton de carga y funciona como jack, carga y a demas... tiene un boton para ir a inicio! (El X no tiene boton, regalamos este boton!!) Solo por 49.95€.</p>
            </section>

            <script src="js/carousel.js"></script>
        </div>

        <?php include 'views/footer.php'; ?>

    </body>
</html>

 */ ?>

<?php

if (isset($_GET['id'])){
    $action = $_GET['id'];
} else {
    $action = null;
}


if ($action){
    require_once($action.'.php');
}else{
    require_once('controllers/controller.php');
}

?>
