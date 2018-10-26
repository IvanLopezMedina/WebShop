<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title> Register </title>
		<link rel="stylesheet" href="">
		<link rel="stylesheet" href="css/register.css">
		<link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="css/dropdown.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		<?php include 'header.php' ?>

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
                        <input id="crea"  type="button" value="Crea una cuenta">
                        <input id="inicia"  type="button" value="Iniciar sessión">
                    </article>
                    <article id="vuelve" class="botones">
                        <input type="button" value="Volver">
                    </article>
                </div>
            </form>
        </section>

		<?php include 'views/footer.php' ?>

		<script type="text/javascript">

            $(document).ready(function(){
                $("#crea").click(function(){
                    $("#registro").toggle(500);
                    $("#iniciar").hide(1000);
                })

                $("#inicia").click(function(){
                    $("#iniciar").toggle(500);
                    $("#registro").hide(1000);
                })
            });

		</script>

	</body>
</html>