<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Agrícola San Guillermo</title>
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
				
				<nav id="nav">
					<ul>
						<li><a href="intranet_ac.php">Home</a></li>
						<li><a href="../logout.php">Cerrar sesión</a></li>
					
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Agente de Compra</h2>
						<p>Santa Ana - Paguipulli</p>
					</header>


		<section>
							<h3>Ingrese datos de compra</h3>
							<form method="post" action="validar_form_compra.php">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<p>Monto</p>
										<input type="text" name="monto" id="monto" value="" placeholder="$$"/>
									</div>
									<div class="6u 12u$(xsmall)">
										<p>Detalle compra</p>
										<input type="text" name="detalle" id="detalle" value="" placeholder="" />
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<p>Proveedor</p>
											<select name="proveedor" id="category">
												  <?php
											require_once("../connect.php");
                                         
                                            $result = mysql_query("SELECT id, nombre, rut FROM proveedor ");
                                            
                                            while ($row = mysql_fetch_row($result))
                                            {
                                            $id = ucwords($row[0]);
                                            $nombre = ucwords($row[1]);
                                	        $rut = ucwords($row[2]);


                                             echo "<option value='$row[0]'> Nombre: $nombre - Rut : $rut </option>";   
                                            }
											?>
											</select>
										</div>
									</div>
									<div class="6u 12u$(xsmall)">
										<p>Fecha de compra</p>
										<input type="date" name="fecha" id="fecha" value="" placeholder="DD/MM/AAAA"/>
									</div>
										<div class="6u 12u$(xsmall)">
										<p>Número de compra</p>
										<input type="text" name="ncompra" id="ncompra" value="" placeholder=""/>
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<p>Agente de compra</p>
											<select name="agente_compra" id="category">
												  <?php
											require_once("../connect.php");
                                         
                                            $result = mysql_query("SELECT rut, nombre, apellido FROM agente_compra ");
                                            
                                            while ($row = mysql_fetch_row($result))
                                            {
                                            $rut = ucwords($row[0]);
                                            $nombre = ucwords($row[1]);
                                	        $apellido = ucwords($row[2]);


                                             echo "<option value='$row[0]'>Rut: $rut - Nombre: $nombre $apellido </option>";   
                                            }
											?>
											</select>
										</div>
									</div>
									<div class="12u$">
										<p>Comentarios</p>
										<textarea name="comentario" id="message" placeholder="Ingrese más información sobre la compra" rows="6"></textarea>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Ingresar compra" class="special" /></li>
											
										</ul>
									</div>
								</div>
							</form>
						</section>



		<!-- Footer -->
			

	</body>
</html>

					
