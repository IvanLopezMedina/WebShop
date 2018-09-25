<html>
	<head>
		<title>Carrito</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			session_start();
			if($_SESSION["usuari"]=="user"){
				echo "<h1> Dades a la cistella </h1>";
				echo "<form method='post'>";
				$index=1;

				$comptador=$_SESSION['comptador'];

				for($c=0;$c<$comptador;$c++){
					$producto="producto".$index;

					if(isset($_POST["resta$index"])){
						@$_SESSION[$producto]=$_SESSION[$producto]-1;
					}

					if(isset($_SESSION[$producto])){
						$pieza="pieza".$index;
						if($_SESSION[$producto]==0){

						}else{
							echo $_SESSION[$pieza]." x ".$_SESSION[$producto]."<br><br>";
							echo " <input type='submit' id='resta$index' name='resta$index' value='Eliminar 1 ".$_SESSION[$pieza]."'><br><br>";
						}
					}

					$index++;
				}

				if(isset($_POST["volver"])){
					header("location:botiga.php");
				}


				echo "<br><br><input type='submit' id='volver' name='volver' value='Tornar a botiga'>";
				echo "</form>";

			}else{
				header("location:botiga.php");
			}
		?>
	</body>
</html>