<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			Formulario de Prueba
		</title>
	</head>
	<body>
		<div id="page">
			<header>
				<div id="logo">
					<img src="img/logo2.png" width="100px" height="100px">
				</div>
				<div id="titulo">
					<h1>Mi Primer Formulario</h1>
				</div>
				<nav id="menu">
					<ul>
						<li><a href="#">Inicio</a></li>
						<li><a href="#"></a>Servicios</li>
						<li><a href="#">Curiosidades</a></li>
						<li><a href="#">Contacto</a></li>
					</ul>
				</nav>
			</header>
			<section>
				<div id="sidebar">
					<div class="article">
					<article>
						<h3>articulo1</h3>
						<p>
							Suspendisse eu sapien non dolor efficitur tincidunt sed eget urna. 
							Nam in nulla ut leo pellentesque euismod sit amet sed risus. 
							Nullam aliquam augue sapien, at sagittis arcu hendrerit eget.
							Cum sociis natoque penatibus et magnis dis parturient montes, 
							nascetur ridiculus mus. Donec dignissim, erat eget venenatis porttitor, 
							est diam elementum nibh, 
							non congue justo mauris vel mi. 
							Sed id leo vulputate nulla mollis varius et et lectus. 
							Integer justo odio, gravida quis imperdiet a, porta eget leo.
							 Aenean vulputate viverra dolor in aliquam. Ut nisl elit, vehicula in odio a, 
							 lacinia tincidunt elit. Curabitur nibh augue, tincidunt vel gravida sit amet, 
							 iaculis nec justo.
						</p>
					</article>
					</div>
					<div class="article">
					<article>
						<h3>Articulo2</h3>
						<p>
							Suspendisse eu sapien non dolor efficitur tincidunt sed eget urna. 
							Nam in nulla ut leo pellentesque euismod sit amet sed risus. 
							Nullam aliquam augue sapien, at sagittis arcu hendrerit eget.
							Cum sociis natoque penatibus et magnis dis parturient montes, 
							nascetur ridiculus mus. Donec dignissim, erat eget venenatis porttitor, 
							est diam elementum nibh, 
							non congue justo mauris vel mi. 
							Sed id leo vulputate nulla mollis varius et et lectus. 
							Integer justo odio, gravida quis imperdiet a, porta eget leo.
							 Aenean vulputate viverra dolor in aliquam. Ut nisl elit, vehicula in odio a, 
							 lacinia tincidunt elit. Curabitur nibh augue, tincidunt vel gravida sit amet, 
							 iaculis nec justo.
						</p>
					</article>
					</div>
				</div>
				<div id="content">
					<!-- <h2>Mi video</h2>
					 <video src="videos/video.webm" width="320" height="240" autoplay></video> -->
					<h2>Ingrese sus Datos</h2>
					<form action="resultado.php" method="post">
						<label>Nombre</label>
						<input type="text" name="nombre">
						<label>Password</label>
						<input type="password" name="pwd">
						<label>Ingrese un Numero</label>
						<input type="number" name="num1">
						<label>Ingrese un segundo Numero</label>
						<input type="number" name="num2">
						<input type="radio" name="operacion" value="suma" checked><label>Suma</label>
						<input type="radio" name="operacion" value="resta"><label>Resta</label>
						<input type="radio" name="operacion" value="producto"><label>Producto</label>
						<input type="radio" name="operacion" value="division"><label>Division</label>
						<input type="submit" name="aceptar" value="Aceptar">
					</form>
				</div>
			</section>
			<footer>
				<label>Hecho Por <a href="#">Mio</a></label>
			</footer>
		</div>
	</body>
</html>