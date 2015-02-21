<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conexion de Base de datos con php</title>
</head>
<body>
	<?php
		/**
		* Ejemplo Sencillo de una conexion con una base de datos
		* $link = mysql_connect("localhost", "usuario", "password");//crea la conexion de la base de datos
		* mysql_select_db("base de datos", $link);//usar la base de datos especificada
		* $result = mysql_query("Consulta",$link);//realizar cualquier consulta de la base de datos
		* mysql_result($result, fila, "nombre de la tabla");//nos devuelve el resultado en la fila seleccionada
		* Una vez tengamos el resultado lo imprimimos normalmente
		*/
		$link = mysql_connect("localhost", "root","root"); 
		mysql_select_db("restaurante", $link); 
		$result = mysql_query("SELECT * FROM BEBIDA", $link); 
		echo "CODBEBIDA: ".mysql_result($result, 0, "CODBEBIDA")."<br>"; 
		echo "NOMBREBEBIDA: ".mysql_result($result, 0, "NOMBREBEBIDA")."<br>"; 
		echo "MARCA:".mysql_result($result, 0, "MARCA")."<br>"; 
		echo "TAMANIO:".mysql_result($result, 0, "TAMANIO")."<br>"; 
		echo "PRECIOBEBIDA:".mysql_result($result, 0, "PRECIOBEBIDA")."<br>"; 
		echo "MEDIDA:".mysql_result($result, 0, "MEDIDA")."<br>"; 
		

	?>
</body>
</html>