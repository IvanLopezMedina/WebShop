<?php ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Sulu Sport </title>
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/dropdown.css">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/dropdown.css">
    </head>

<body>

<section id="elegir">
    <form action="index.php">
        <div id="registro" class="respuestas">
            <article>
                Nombre: <input type="nom" name="nom">
                Primer apellido: <input type="primerCognom" name="primerCognom">
                Segundo apellido: <input type="segonCognom" name="segonCognom">
                Correo: <input type="mail" name="añoNacimiento" step="2">
                Contraseña: <input type="password">
            </article>
            <article>
                <input type="submit" value="Enviar">
                <input type="reset" value="Borra">
            </article>
        </div>
        <div id="iniciar" class="respuestas">
            <article>
                Correo: <input type="mail" name="añoNacimiento" step="2">
                Contraseña: <input type="password">
            </article>
            <article>
                <input type="submit" value="Enviar">
                <input type="reset" value="Borra">
            </article>
        </div>
        <div>
            <article id="opciones" class="botones">
                <input id="crea" onclick="muestraQuita(1)" type="button" value="Crea una cuenta">
                <input id="inicia" onclick="muestraQuita(2)" type="button" value="Iniciar sessión">
            </article>
            <article id="vuelve" class="botones">
                <input onclick="muestraQuita(0)" type="button" value="Volver">
            </article>
        </div>
    </form>
</section>


<?php include 'footer.php'; ?>

<script type="text/javascript">

    /***** FUNCION BOTONES CREAR, INICIAR Y VOLVER *****/
    //Funcion para los botones de Crear una cuenta, Iniciar sessión y Volver.
    //Tiene que ir en este fixero porque si la pones externa no iran bien, son buttons, no submit.

    function muestraQuita(int){
        document.getElementById("opciones").style.display = "none";
        document.getElementById("vuelve").style.display = "block";
        switch(int){
            case 0:
                document.getElementById("registro").style.display = "none";
                document.getElementById("iniciar").style.display = "none";
                document.getElementById("vuelve").style.display = "none";
                document.getElementById("opciones").style.display = "block";
                break;
            case 1:
                document.getElementById("registro").style.display = "block";
                break;
            case 2:
                document.getElementById("iniciar").style.display = "block";
                break;
        }
    }
    /***** FUNCION BOTONES CREAR, INICIAR Y VOLVER *****/

</script>

</body>

</html>


