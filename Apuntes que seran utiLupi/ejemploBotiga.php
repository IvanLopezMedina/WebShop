<html>
	<head>
		<title>Botiga</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			session_start();
			if($_SESSION["usuari"]=="user"){
				$servidor="localhost";
				$usuari="root";
				$password="";
				$bbdd="botiga";
				$connexio=mysqli_connect($servidor, $usuari, $password, $bbdd);
				$comptador=0;
				$vecesP1=0;
				$vecesP2=0;
				$vecesP3=0;
				$vecesP4=0;
				
				$query="select nom,preu,stock,codiProducte from PRODUCTE";
				$resultat=mysqli_query($connexio,$query);

				if(isset($_POST["carrito"])){
					header("location:carrito.php");
				}

				if(isset($_POST["comprar"])){
					header("location:comprar.php");
				}

				echo "<form method='post' id='formulario' name='formulario' action='botiga.php'>";
				echo "<h1> Botiga d'en Mousofá <input type='submit' id='carrito' name='carrito' value='Cistella'> <input type='submit' id='comprar' name='comprar' value='Fianlitzar compra'><br></h1>";
				while($fila=mysqli_fetch_array($resultat, MYSQL_ASSOC)){
					$comptador++;
					echo "<br> <input type='submit' id='guardar$comptador' name='guardar$comptador' value='Guardar'> ".$fila["nom"]." ".$fila["preu"]."€ <br>";
					$_SESSION['pieza'.$comptador]=$fila["nom"];
					$_SESSION['preu'.$comptador]=$fila["preu"];
					$_SESSION['producte'.$comptador]=$fila["codiProducte"];
					$_SESSION['stock'.$comptador]=$fila["stock"];
				}

				echo "</form>";

				@$_SESSION['comptador']=$comptador;

				for($c=0;$c<=$comptador;$c++){
					$veces=0;
					if(isset($_POST["guardar$c"])){
						$veces++;
						$producto="producto".$c;
						@$_SESSION[$producto]=$_SESSION[$producto]+$veces;
					}
				}

			}else{
				header("location:login.php");
			}
		?>
	</body>
</html>