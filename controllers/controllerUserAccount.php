<?php
if (!empty($_SESSION["id"])) {
    require_once(__DIR__ . '/navcontroller.php');
    require_once(__DIR__ . '/../models/connectaBD.php');
    $conn = connectaDB();

    require_once(__DIR__ . '/../models/infoUser.php');
    $correu = $_SESSION['correu'];
    $userDetails = consultaUsuari($conn, $correu);
    $nom = '';

    foreach ($userDetails as $user) {
        $nom = $user['nom'];
        $correu = $user['correu'];
        $calle = $user['calle'];
        $codipostal = $user['codipostal'];
        $poblacio = $user['poblacio'];
        $avatar = $user['avatar'];

    }

    if (isset($_POST['nom']) || isset($_POST['calle']) ||
        isset($_POST['codipostal']) || isset($_POST['poblacio'])) {
        $novesDades = [
            'nom' => $_POST['nom'],
            'calle' => $_POST['calle'],
            'codipostal' => $_POST['codipostal'],
            'poblacio' => $_POST['poblacio'],
        ];

        updateUser($conn, $correu, $novesDades);

    }

    if (isset($_FILES['profile_image']) && !empty($_FILES['profile_image'])) {
        $filesAbsolutePath = '/home/TDIW/tdiw-n4/public_html/fitxers/';
        $imagepath = "fitxers/avatar".$correu.".jpg";
        move_uploaded_file(
            $_FILES['profile_image']['tmp_name'],
            $imagepath
        );
        setAvatar($conn, $correu, $imagepath);
        ?><script> window.location.replace("http://tdiw-n4.deic-docencia.uab.cat/?accio=account")</script> <?php
    }


    // Lupi: si el usuario no he hecho login no se puede entrar en modificar, que no entre por URL falta bloquearlo.
    //      Tambien falta hacer el select a la bd y mostrarlo en la vista de abajo, son los span grises to bonicos.
    //      No soy gay y no se diseñar.

    require_once(__DIR__ . '/../views/viewUserAccount.php');
    require_once(__DIR__ . '/footercontroller.php');

}else header("Location: http://tdiw-n4.deic-docencia.uab.cat");
?>