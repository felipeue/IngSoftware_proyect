<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Ingreso agentes de compra</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1></h1>
				<nav id="nav">
					<ul>
						<li><a href="../index.html">Home</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Agentes de compra</h2>
						<p></p>
					</header>

					<!-- Text -->
						<form method="post" action="validar_ac.php">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="rut" id="rut" value="" placeholder="Rut" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="password" name="pass" id="pass" value="" placeholder="Clave" />
									</div>		
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Ingresar" class="special" />
										</ul>
									</div>
								</div>
							</form>
						
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						
						
						<section class="4u$ 12u$(medium) 12u$(small)">
							<h3>Contactenos</h3>
							<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-pinterest"><span class="label">Pinterest</span></a></li>
								<li><a href="#" class="icon rounded fa-google-plus"><span class="label">Google+</span></a></li>
								<li><a href="#" class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="tabular">
								<li>
									<h3>Dirección</h3>
									Calle Galvez 920, Isla de Maipo, <br>Talagante, Región Metropolitana, Chile
									
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">contacto@asanguillermo.cl</a>
								</li>
								<li>
									<h3>Phone</h3>
									(000) 000-0000
								</li>
							</ul>
						</section>
					</div>
					<ul class="copyright">
						<li>&copy; Agrícola San Guillermo. All rights reserved.</li>
						<li>Intranet <a href="http://unsplash.com">Admin</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>