<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Factura</title>
</head>
<body>
	<?php
		$link = mysql_connect("localhost", "root","xperiask17i"); 
		mysql_select_db("restaurante", $link); 
		/*$result = mysql_query("SELECT * FROM BEBIDA", $link); 
		echo "CODBEBIDA: ".mysql_result($result, 0, "CODBEBIDA")."<br>"; 
		echo "NOMBREBEBIDA: ".mysql_result($result, 0, "NOMBREBEBIDA")."<br>"; 
		echo "MARCA:".mysql_result($result, 0, "MARCA")."<br>"; 
		echo "TAMANIO:".mysql_result($result, 0, "TAMANIO")."<br>"; 
		echo "PRECIOBEBIDA:".mysql_result($result, 0, "PRECIOBEBIDA")."<br>"; 
		echo "MEDIDA:".mysql_result($result, 0, "MEDIDA")."<br>"; 
		*/
		$producto = $_REQUEST["producto"];
		$tipo = $_REQUEST["tipo"];
		$prod = "";
		$precio = "";
		if ($tipo == 'p') {
			$result = mysql_query("SELECT * FROM PLATO WHERE CODIGOPLATO=$producto", $link);
			 $prod = "".mysql_result($result, 0, "NOMBREPLATO");
			 $precio = "".mysql_result($result, 0, "PRECIOPLATO");
			 
		}
		elseif ($tipo == 'b') {
			$result = mysql_query("SELECT * FROM BEBIDA WHERE CODBEBIDA=$producto", $link);
			$prod = "".mysql_result($result, 0, "NOMBREBEBIDA");
			$precio = "".mysql_result($result, 0, "PRECIOBEBIDA");
			 
		}
		else {
			$prod="";
			$precio="";
		}

	 ?>
	<div id="formulario-factura">
		<h1>Factura</h1>
		<form action="" method="post">
			<label>Nombre</label>
			<input type="text" name="nombre">
			<label>Nit</label>
			<input type="text" name="nit">
			<?php 
			echo "<table>
				<tr>
					<th>Producto</th>
					<th>Precio</th>
					<th>Cantidad</th>
				</tr>
				<tr>
					<td><input type=\"text\" name=\"producto\" value=\" $prod\"></td>
					<td><input type=\"text\" name=\"precio\" value=\"$precio\"></td>
					<td><input type=\"text\" name=\"cantidad\"></td>
				</tr>
				<tr>
					<tfoot>
						<!-- <th></th> -->
						<th colspan=\"2\">Total</th>
						<th><input type=\"text\" name=\"total\"></th>
					</tfoot>
				</tr>
			</table>";
			?>
			<input type="submit" value="Aceptar">
		</form>
	</div>
</body>
</html>