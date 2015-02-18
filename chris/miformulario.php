<!doctype html>
<html>
	<head> 
		<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mi Formulario</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
		<div id="page">
			<header>
				<div id="logo">
					<img src="img/logo2.png" width="100px" height="100px">
				</div>
				<div id="titulo">
					<h1>Mi Primer Formulario en Html</h1>
				</div>
			</header>
			<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">My Site</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="active"><a href="#">Right Button Active</a></li>
      <li class="has-dropdown">
        <a href="#">Right Button Dropdown</a>
        <ul class="dropdown">
          <li><a href="#">First link in dropdown</a></li>
          <li class="active"><a href="resultado.php">Active link in dropdown</a></li>
        </ul>
      </li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="#">Left Nav Button</a></li>
    </ul>
  </section>
</nav>
			<section id="pagina">
				<div id="sidebar" class="large-3 columns">
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
				<div id="content" class="large-9 columns">
					<!-- <h2>Mi video</h2>
					 <video src="videos/video.webm" width="320" height="240" autoplay></video> -->
					<h2>Ingrese sus Datos</h2>
						<form action="resultado.php" method="post">
							<div class="row">
								<div class="large-12 columns">
									<label>Nombre</label>
									<input type="text" name="nombre">
								</div>
							</div>
							<div class="row">
								<div class="large-12 columns">
									<label>Password</label>
									<input type="password" name="pwd">
								</div>
							</div>
							<div class="row">
								<div class="large-12 columns">
									<label>Ingrese un Numero</label>
									<input type="text" name="num1">
								</div>
							</div>
							<div class="row">
								<div class="large-12 columns">
									<label>Ingrese un segundo Numero</label>
									<input type="text" name="num2">
								</div>
							</div>
							<div class="large-12 columns">
								<input type="radio" name="operacion" value="suma" checked><label>Suma</label>
								<input type="radio" name="operacion" value="resta"><label>Resta</label>
								<input type="radio" name="operacion" value="producto"><label>Producto</label>
								<input type="radio" name="operacion" value="division"><label>Division</label>
							</div>
							<div class="row">
								<div href="#" class="button" >Aceptar</a>
								</div>
							</div>
						</form>
					</div>
			</section>
			<footer>
				<label>Hecho Por <a href="#">Mio</a></label>
			</footer>
		</div>

		<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
	</body>
</html>