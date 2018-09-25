<html>
	<head>
		<title>Comprar</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php
			$servidor="localhost";
			$usuari="root";
			$password="";
			$bbdd="botiga";
			$connexio=mysqli_connect($servidor, $usuari, $password, $bbdd);
			$query="";
			$resultat="";

			session_start();
			if($_SESSION["usuari"]=="user"){
				echo "<form method='post'>";
					echo "<h1> Enviat el pagament al tu banc... </h1>";

					if(isset($_POST["botiga"])){
						$index=1;

						$data=date('Y-m-d');
						$sessiones=session_id();
						$comptador=$_SESSION['comptador'];

						$comptador=$_SESSION['comptador'];

						for($c=0;$c<$comptador;$c++){

							$producto="producto".$index;

							if(isset($_SESSION[$producto])){
								if($_SESSION[$producto]==0){

								}else{
									$comptador2=$_SESSION[$producto];
									$codigoCliente=$_SESSION['usuario'];
									$producte="producte".$index;
									$codiProducte=$_SESSION[$producte];
									$cuantos="stock".$index;
									$cantidad=$_SESSION[$cuantos];

									for($i=0;$i<$comptador2;$i++){
										$query="insert into COMANDA(codiClient,codiProducte,Data,idSessio) values('$codigoCliente','$codiProducte','$data','$sessiones')";
										$resultat=mysqli_query($connexio,$query);

										$cantidad=$cantidad-1;
										$query2="update PRODUCTE set stock=$cantidad where codiProducte=$codiProducte";
										$resultat2=mysqli_query($connexio,$query2);
									}
								}
							}
							$index++;
						}
						session_destroy();
						header("location:login.php");
					}
					echo "<input type='submit' id='botiga' name='botiga' value='Tancar sessio i aceptar el pagament'>";
				echo "</form>";
			}else{
				header("location:botiga.php");
			}
		?>
	</body>
</html>