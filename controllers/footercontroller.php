<?php
require_once(__DIR__.'/../models/connectaBD.php');
require_once(__DIR__.'/../models/consultaCategories.php');

$categories = consultaCategoria($conn);

require_once(__DIR__.'/../views/footer.php');

?>