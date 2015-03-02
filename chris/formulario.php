<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario en php</title>
	<link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" type="text/css" href="css/app.css">
  <script src="js/vendor/modernizr.js"></script>
</head>
<body>
	<h1>Mi Primer Formulario</h1>
	<form action="res.php" method="post">
		<h2>Intruzca su nombre</h2>
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre">
		<h2>Introduzca Un Deporte</h2>
		<input type="radio" name="deporte" id="" value="futbol">
		<label>Futbol</label>
		<input type="radio" name="deporte" id="" value="basket">
		<label>Basket</label>
		<input type="radio" name="deporte" id="" value="tennis">
		<label>Tennis</label>
		<input type="radio" name="deporte" id="" value="voley">
		<label>Voley</label>
		<h2>Introduzca Una o mas Materia</h2>
		<input type="checkbox" name="calculo" id="">
		<label>Calculo</label>
		<input type="checkbox" name="fisica" id="">
		<label>Fisica</label>
		<input type="checkbox" name="progra" id="">
		<label>Programacion</label>
		<input type="submit" value="Aceptar">
	</form>

	<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>