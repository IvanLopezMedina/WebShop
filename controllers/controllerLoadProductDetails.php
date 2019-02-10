<?php
require_once(__DIR__.'/../models/connectaBD.php');
$conn = connectaDB();

require_once(__DIR__.'/../models/loadProductDetails.php');

$details = loadDetails($conn);

require_once(__DIR__.'/../views/viewProductDetails.php');


?>