<html>
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			session_start();
			$servidor="localhost";
			$usuari="root";
			$password="";
			$bbdd="botiga";
			$connexio=mysqli_connect($servidor, $usuari, $password, $bbdd);
			$_SESSION["usuari"]="";

			if(isset($_POST["enviar"])){
				$nom=$_POST["nom"];
				@$_SESSION['usuario']=$nom;
				$contraseña=$_POST["contraseña"];

				$query="select codiClient,password from CLIENT where codiClient='$nom' and password='$contraseña'";
				$resultat=mysqli_query($connexio,$query);

				if(mysqli_num_rows($resultat)!=0){
					$_SESSION["usuari"]="user";
					header("location:botiga.php");
				}else{
					header("location:login.php");
				}
			}

			if(mysqli_connect_errno()){
					echo "Error MySQL: ".mysqli_connect_error();
					exit();
			}else{
				echo "<h1> Login </h1>";
				echo "<form id='formulari' method='post' action='login.php'>";
					echo "Nom: <br><input type='text' id='nom' name='nom'><br><br>";
					echo "Contrasenya: <br><input type='password' id='contraseña' name='contraseña'><br><br>";
					echo "<input type='submit' id='enviar' name='enviar' value='Enviar'>";
				echo "</form>";
			}
		?>
	</body>
</html>