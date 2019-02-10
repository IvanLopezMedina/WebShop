<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Sulu Sport </title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/usermenu.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <link rel="stylesheet" href="../css/products.css">
    <script src="../js/carregaOpcions.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/clickSubcategory.js"></script>
</head>
<body>
<header id="header">
    <nav id="topnav">
        <ul id="products">
            <a href="../"><img id="logo1" src="../img/logo.png"><img id="logo2" src="../img/logo2.png"></a>
        </ul>

        <ul id="registreCistella">
            <li id="displaymenu" onmouseenter="carregaOpcions(this)">
                <img src="../img/user.png">
                <ul class="usermenu">
                    <!-- JQUERY OPTIONS -->
                </ul>

            </li>
            <li id="cistella" onmouseenter="carregaCistell()">
                <img  src="../img/cart.png">
                <ul class="productesCistella"> </ul>

            </li>

        </ul>
    </nav>

</header><!-- /header -->