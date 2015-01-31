<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resultados</title>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<?php
		$nom = $_POST['nombre'];
		$pwd = $_POST['pwd'];
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$ope = $_POST['operacion'];
		echo "<div id=\"titulo\">
						<h1>Resultados</h1>
					</div>";

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
	<table>
	<tbody>
		<tr>
			<th></th>
			<td></td>
		</tr>
		<tr>
			
		</tr>
		<tfoot>
			
		</tfoot>
	</tbody>
	</table>
</body>

</html>