<?php ?>
<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="../js/validationRegister.js">
<div id="gridimage">
    <section id ='reg'>
        <p class="textavatar"> AVATAR</p class="textavatar">
        <img class ="imageavatar" src="<?php echo $avatar ?>"/>
    </section>
    <section id="log1">
        <form method="post" enctype="multipart/form-data">
            <h3>Modifica tus datos personales</h3>
            <p> Nombre y Apellidos: </p> <input class="textbox" type="text" name="nom" value="<?php echo $nom; ?>" onfocusout="validate(this)"/>
            <p> Avatar </p><input type="file" name="profile_image" /> </p>
            <p> Correo: </p> <input class="textbox" type="email" name="correu"  readonly value="<?php echo $correu; ?>"/>
            <h6> Para modificar su correo contacte con el administrador</h6>
            <p> Calle: </p> <input class="textbox" type="text" name="calle" value="<?php echo $calle; ?>"/>
            <p> Población: </p> <input class="textbox" type="text" name="poblacio" value="<?php echo $poblacio; ?>"/>
            <p> Codigo Postal: </p> <input class="textbox" type="text" pattern="[0-9]{5}" title="5 números de Codigo Postal" name="codipostal" value="<?php echo $codipostal; ?>"/><br/><br/>
            <input type="submit" value ="Modificar" class ="button" name="registro"/>

        </form>
    </section>
</div>

