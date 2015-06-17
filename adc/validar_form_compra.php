<?php
header("Content-Type: text/html;charset=utf-8");
require_once("../connect.php");
require_once("../validadores.php");
$monto = $_POST["monto"];   
$detalle = $_POST["detalle"];
$comentario = $_POST["comentario"];
$ac = $_POST["agente_compra"];
$proveedor = $_POST["proveedor"];
$ncompra = $_POST["ncompra"];
$fecha = $_POST["fecha"];
/*Validando entradas del formulario*/
$v1 = valnum($monto);
$v2 = vacio($detalle);
$v3 = vacio($proveedor);
$v4 = valfecha($fecha);
if ($v1 == TRUE && $v2 == TRUE && $v3 == TRUE && $v4 == TRUE)
{
	 mysql_query("INSERT INTO compra(monto, detalle, comentario, proveedor, rut_ac, fecha, numero_de_compra) 
    VALUES ('$monto', '$detalle', '$comentario','$proveedor','$ac','$fecha', '$ncompra')") or die (mysql_error());
  ?>
  <script languaje="javascript">
  alert("Compra enviada para evaluación");
  location.href = document.referrer;
  </script>
  <? 
} 
else
{
  ?>
  <script languaje="javascript">
  alert("Error al ingresar compra");
  location.href = document.referrer;
  </script>
  <? 	
}
?>