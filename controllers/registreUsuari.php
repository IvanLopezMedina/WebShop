<?php

require_once('../models/connectaBD.php');

$connexio = connectaBD();
$resultat = consulta($connexio);


require_once('../views/mostraRegistreUsuari.php');


?>