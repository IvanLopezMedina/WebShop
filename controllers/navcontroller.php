<?php
require_once(__DIR__.'/../models/connectaBD.php');
$conn = connectaDB();

require_once(__DIR__.'/../views/header.php');
require_once(__DIR__.'/../models/consultaCategories.php');
require_once(__DIR__.'/../models/consultaSubcategories.php');

$categories = consultaCategoria($conn);
$subCategories = consultaSubcategoria($conn);

require_once(__DIR__.'/../views/nav.php');


?>
<div id="inicio">

