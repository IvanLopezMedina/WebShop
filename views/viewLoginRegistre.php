<?php ?>
<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="../js/validationRegister.js">
<div id="grid">
    <section id="registro" style="grid-area:reg">
        <form method="post"">
            <h3>Registre</h3>
            <p>* Nombre y Apellidos: </p> <input class="textbox" type="text" name="nom" placeholder="Nom.." onfocusout="validate(this)"/>
            <p>* Correo: </p> <input class="textbox" type="email" name="correoreg" placeholder="Email.."/>
            <p>* Contraseña: </p> <input class="textbox" type="password" name="passwordreg" placeholder="Contraseña.."/>
            <p>* Calle: </p> <input class="textbox" type="text" name="callereg" placeholder="Calle.."/>
            <p>* Población: </p> <input class="textbox" type="text" name="poblacioreg" placeholder="Población.."/>
            <p>* Codigo Postal: </p> <input class="textbox" type="text" pattern="[0-9]{5}" title="5 números de Codigo Postal" name="postalreg" placeholder="Codigo Postal.."/><br/><br/>
            <input type="submit" value ="Registrar" class ="button" name="registro"/>
        </form>
    </section>

    <section id="login" style="grid-area:log">
        <h3>Login</h3>
        <form method="post">
            <p>* Correo: </p> <input class="textbox" type="email" name="correolog" placeholder="Email.."/>
            <p>* Password: </p> <input class="textbox" type="password" name="passwordlog" placeholder="Password.."/><br/><br/>

            <input id ="submit" type="submit" value ="Login" class ="button" name="login"/>
        </form>
    </section>

</div>

