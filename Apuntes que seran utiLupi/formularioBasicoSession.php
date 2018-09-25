<html>
	<head>
		<title>Index</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			session_start();
			$servidor="localhost";
			$usuari="root";
			$password="";
			$bbdd="gndaw2";
			$connexio=mysqli_connect($servidor, $usuari, $password, $bbdd);

			$comptador=0;

			if(isset($_POST["enviar"])){
				$nomUsuari=$_POST["nom"];
				$contraseña=$_POST["contra"];
				$correu=$_POST["correu"];

				$contraseña=md5($contraseña);

				$query="select nomUsuari from USUARI where nomUsuari='$nomUsuari'";
				$resultat=mysqli_query($connexio,$query);
				$fila=mysqli_fetch_array($resultat);

				if($fila["nomUsuari"]==$nomUsuari){
					$_SESSION["validat"]=1;
					header("location:entra.php");
				}else{
					$query="insert into USUARI(nomUsuari,password,correu) values('$nomUsuari','$contraseña','$correu')";
					$resultat=mysqli_query($connexio,$query);
					header("location:entra.php");
				}
			}

			if(isset($_POST["estoy"])){
				$_SESSION["validat"]=0;
				header("location:entra.php");
			}

			if(mysqli_connect_errno()){
					echo "Error MySQL: ".mysqli_connect_error();
					exit();
			}else{
				if($comptador==0){
					echo "<h1> Registre de usuari </h1>";
					echo "<form id='formulari' method='post' action='index.php'>";
						echo "Nom: <br><input type='text' id='nom' name='nom'><br><br>";
						echo "Correu: <br><input type='text' id='correu' name='correu'><br><br>";
						echo "Contrasenya: <br><input type='password' id='contra' name='contra'><br><br>";
						echo "<input type='submit' id='enviar' name='enviar' value='Enviar'>";
						echo "  <input type='submit' id='estoy' name='estoy' value='Estic registrat'>";
					echo "</form>";
				}else{

				}
			}
		?>
	</body>
</html>