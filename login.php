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
	</head>
	<body>

		<header id="header" class="">
				<div id="topnav">
					<ul id="products" class="arriba">
						<li class="dropdown">FotoMarca</li>
						<li class="dropdown">FotoProducto</li>
						<li class="dropdown">FotoBestProducto</li>
						<li class="dropdown">FotoOfertas</li>
					</ul>
					<ul id="registreCistella" class="arriba">
						<li id="iniciaSesion" class="dropdown">
							<a id="linkInicia" href="register.html">Registro</a>
						</li>
						<li id="ayuda" class="dropdown">Ayuda</li>
						<li class="dropdown">Carrito</li>
					</ul>
				</div>

				<nav class ="nav">
					<ul>
						<li class="dropdown">
							<a href="" > HOMBRE </a>
							<div class="dropdown-content">
								<a> CAMISETAS </a>
								<a> PANTALONES </a>
								<a> ZAPATILLAS </a>
							</div>
						</li>
						<li class="dropdown">
							<a href="" > MUJER </a>
							<div class="dropdown-content">
								<a> CAMISETAS </a>
								<a> PANTALONES </a>
								<a> ZAPATILLAS </a>
							</div>
						</li>
						<li class="dropdown">
							<a href="" > NIÑOS </a>
							<div class="dropdown-content">
								<a> CAMISETAS </a>
								<a> PANTALONES </a>
								<a> ZAPATILLAS </a>
							</div>
						</li>
						<li class="dropdown">
							<a href="" > COMPLEMENTOS </a>
							<div class="dropdown-content">
								<a> CAMISETAS </a>
								<a> PANTALONES </a>
								<a> ZAPATILLAS </a>
							</div>
						</li>
					</ul>
				</nav>
		</header><!-- /header -->

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

		<footer>
			<h1> Contacta con nosotros </h1>
		</footer>

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