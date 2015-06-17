<?php
header("Content-Type: text/html;charset=utf-8");
require_once("../connect.php");
require_once("../validadores.php");
$compra = $_POST["compra"];   

/*Validando entradas del formulario*/
$v1 = vacio($compra);

if ($v1 == TRUE)
{
	 mysql_query("UPDATE compra SET revisada = 'si' WHERE id = '$compra'");
  ?>
  <script languaje="javascript">
  alert("Compra aprobada");
   location.href = "intranet_contador.php";
  </script>
  <? 
} 
else
{
  ?>
  <script languaje="javascript">
  alert("Error al ingresar compra");
  location.href = "intranet_contador.php";
  </script>
  <? 	
}
?>