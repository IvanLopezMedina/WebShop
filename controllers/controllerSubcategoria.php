<?php
require_once(__DIR__.'/../models/connectaBD.php');
$conn = connectaDB();
require_once(__DIR__.'/../models/consultaSubcategories.php');

echo $_GET['categoria'];
$subCategories = consultaSubcategoria($conn);

?>