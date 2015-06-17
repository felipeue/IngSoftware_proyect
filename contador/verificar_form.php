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
						<li><a href="intranet_contador.php">Home</a></li>
						<li><a href="../logout.php">Cerrar sesión</a></li>
					
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major">
						<h2>Contador</h2>
						<p>Agrícola San Guillermo - Isla de Maipo</p>
					</header>


		<section>
							<h3>Seleccione compra a validar</h3>
							<form method="post" action="aprobar.php">
								<div class="row uniform 50%">
									

									<div class="12u$">
										<div class="select-wrapper">
											<p>Seleccione una compra a revisar</p>
											<select name="compra" id="category">
												  <?php
											require_once("../connect.php");
                                         
                                            $result = mysql_query("SELECT compra.id, compra.detalle, compra.monto, proveedor.nombre FROM proveedor, compra WHERE proveedor.id = compra.proveedor AND compra.revisada IS NULL");
                                            
                                            while ($row = mysql_fetch_row($result))
                                            {
                                            $id = ucwords($row[0]);
                                            $detalle = ucwords($row[1]);
                                	        $monto = ucwords($row[2]);
                                	        $proveedor = ucwords($row[3]);


                                             echo "<option value='$row[0]'> Proveedor: $proveedor - Detalle : $detalle - Monto: $ $monto </option>";   
                                            }
											?>
											</select>
										</div>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Revisar compra" class="special" /></li>
											
										</ul>
									</div>
								</div>
							</form>
						</section>



		<!-- Footer -->
			

	</body>
</html>

					
