<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultado de Formulario</title>
</head>
<body>
	<?php 
		$nom = $_REQUEST["nombre"];
		$dep = $_REQUEST["deporte"];
		echo $nom."<br>";
		echo $dep."<br>";
		if (isset($_REQUEST["calculo"])) {
			echo "Tomo Calculo<br>";
		}
		if (isset($_REQUEST["fisica"])) {
			echo "Tomo Fisica<br>";
		}
		if (isset($_REQUEST["progra"])) {
			echo "Tomo Programacion<br>";
		}
	 ?>
</body>
</html>