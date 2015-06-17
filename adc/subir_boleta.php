<?php
header("Content-Type: text/html;charset=utf-8");
require_once("../connect.php");
require_once("../validadores.php");

$nombre = $_POST["nombre"];
echo "$nombre";
$compra = $_POST["compra"];
echo "$compra";
$documento = $_FILES['documento'];
$ruta1 = "../boletas/" . $_FILES['documento']['name'];
echo "$ruta1";
//comprobamos si ha ocurrido un error.
if ($_FILES["documento"]["error"] > 0)
{
  ?>
  <script languaje="javascript">
  alert("ha ocurrido un error");
  location.href = document.referrer;
  </script>
  <? 
} 
else 
{
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png","application/vnd.ms-excel","application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","application/vnd.ms-powerpoint","application/vnd.openxmlformats-officedocument.presentationml.presentation","application/vnd.openxmlformats-officedocument.wordprocessingml.document","application/pdf","application/msword");
	$limite_kb = 10000000000;
	if (in_array($_FILES['documento']['type'], $permitidos) && $_FILES['documento']['size'] <= $limite_kb * 1024)
	{
		//esta es la ruta donde copiaremos la documento
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "../boletas/" . $_FILES['documento']['name'];
		//comprobamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta))
		{
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["documento"]["tmp_name"], $ruta);
			if ($resultado)
			{
				$documento = $_FILES['documento']['name'];
				@mysql_query("INSERT INTO boleta (nombre, documento, id_compra) VALUES ('$nombre','$documento','$compra')");
				@mysql_query("UPDATE compra SET asociada = 'si' WHERE id = '$compra'");

				 	?>
  					<script languaje="javascript">
  					alert("Su boleta ha sido enviada para revisión");
  					location.href = document.referrer;
  					</script>
 					<? 
			} 
			else 
			{
					?>
  					<script languaje="javascript">
  					alert("ocurrio un error al mover el archivo.");
  					location.href = document.referrer;
  					</script>
 					<? 
			}
		} 
		else 
		{
					?>
  					<script languaje="javascript">
  					location.href = document.referrer;
  					</script>
 					<? 
			        echo $_FILES['documento']['name'] . ", este archivo existe";
		}
	} 
	else 
	  {
	  	?>
  		<script languaje="javascript">
  		alert("archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes");
  		location.href = document.referrer;
  		</script>
 		<?
		
	  }
}
?>