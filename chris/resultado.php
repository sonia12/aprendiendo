<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resultados</title>
</head>
<body>
	<?php
		$nom = $_POST['nombre'];
		$pwd = $_POST['pwd'];
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$ope = $_POST['operacion'];

		echo "Hola Mi Nombre es: ".$nom;
		echo "<br>";
		echo "Mi password es: ".$pwd;
		if ($ope == "suma") {
			$res=$num1+$num2;
		}
		elseif ($ope == "resta") {
			$res=$num1-$num2;
		}
		elseif ($ope == "producto") {
			$res=$num1*$num2;
		}
		else
		{
			$res=$num1/$num2;
		}
		echo "<p> Mi Resultado es: ".$res."</p>"; 
	?>
</body>

</html>