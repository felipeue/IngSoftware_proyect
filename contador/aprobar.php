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
						<?php
						echo "<h2>Detalles de compra </h2>";
						echo "<p>Agrícola San guillermo - Isla de maipo</p>";
						
						require_once("../connect.php");
						require_once("../validadores.php");
						$compra = $_POST["compra"]; 
						$result = mysql_query("SELECT compra.monto, compra.detalle, compra.comentario, compra.proveedor, agente_compra.nombre, agente_compra.apellido, compra.fecha, compra.numero_de_compra, boleta.documento, proveedor.nombre FROM compra, agente_compra, boleta, proveedor WHERE compra.id = '$compra' AND compra.rut_ac = agente_compra.rut AND proveedor.id = compra.proveedor AND boleta.id_compra = compra.id ") or die (mysql_error());
						while ($row = mysql_fetch_row($result))
                                            {
                                            $monto = ucwords($row[0]);
                                            $detalle = ucwords($row[1]);
                                	        $comentario = ucwords($row[2]);
                                	        $proveedor = ucwords($row[9]);
                                	        $nagente_compra = ucwords($row[4]);
                                	        $aagente_compra = ucwords($row[5]);
                                	        $fecha = ucwords($row[6]);
                                	        $ncompra = ucwords($row[7]);
                                	        $boleta = ucwords($row[8]);	


                                            echo "<div class='table-wrapper'>
											<table class='alt'>
											<thead>
										<tr>
											<th>Monto</th>
											<th>Detalle</th>
											<th>Proveedor</th>
											<th>Agente de compra</th>
											<th>Fecha de compra</th>
											<th>Numero de compra</th>
											<th>Boleta o factura</th>
											<th>Comentario</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											<td>$$monto</td>
											<td>$detalle</td>
											<td>$proveedor</td>
											<td>$nagente_compra $aagente_compra</td>
											<td>$fecha</td>
											<td>$ncompra</td>
											<td><a href='../boletas/$boleta'>$boleta</a></td>
											<td>$comentario</td>
										</tr>
									</tbody>
									
								</table>
							</div> "; 
                                            }	
                            echo "<form method='post' action='aprobar_final.php'>
								<div class='row uniform 50%'>
									<div class='6u 12u$(xsmall)' >
										<input type='hidden' name='compra' id='compra' value='$compra' placeholder=''/>
									</div>											
									<div class='12u$'>
										<ul class='actions'>
											<li><input type='submit' value='Aprobar compra' class='special' />
										</ul>
										<ul class='actions'>
											<li><input type='submit' value='Rechazar compra' class='special' />
										</ul>
									</div>
								</div>
							</form>	";				
						
						?>

					</header>




		<!-- Footer -->
			

	</body>
</html>

					
