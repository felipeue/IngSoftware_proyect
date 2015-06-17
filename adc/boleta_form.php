<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Agrícola San Guillermo</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
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
							<h3>Adjunte boleta</h3>
							<form method="post" action="subir_boleta.php" enctype="multipart/form-data">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<p>Nombre documento</p>
										<input type="text" name="nombre" id="nombre" value="" placeholder=""/>
									</div>

									<div class="6u 12u$(xsmall)">
										<p>Documento</p>
										<p><input name="documento" type="file" id="documento"/></p>
									</div>
								
									<div class="12u$">
										<div class="select-wrapper">
											<p>Compra asociada</p>
											<select name="compra" id="compra">
											<?php
											require_once("../connect.php");
                                         
                                            $result = mysql_query("SELECT compra.id, compra.monto, compra.proveedor, compra.detalle, proveedor.nombre FROM compra, proveedor WHERE asociada = ' ' or asociada IS NULL AND proveedor.id= compra.proveedor");
                                            
                                            while ($row = mysql_fetch_row($result))
                                            {
                                            $monto = ucwords($row[1]);
                                            $proveedor = ucwords($row[2]);
                                	        $detalle = ucwords($row[3]);
                                	        $nproveedor = ucwords($row[4]);


                                             echo "<option value='$row[0]'>Monto: $ $monto - Proveedor: $nproveedor - Detalle: $detalle </option>";   
                                            }
											?>
											</select>
										</div>
									</div>

									
									
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Ingresar boleta o factura" class="special" /></li>
											
										</ul>
									</div>
								</div>
							</form>
						</section>



		<!-- Footer -->
			

	</body>
</html>

					
