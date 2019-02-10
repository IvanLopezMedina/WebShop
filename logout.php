<?php

if (!empty($_SESSION["correu"]) && !empty($_SESSION["pwd"])){
    session_destroy();
}


?><script>window.location.replace("/")</script>