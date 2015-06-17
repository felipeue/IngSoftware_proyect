<?php
header("Content-Type: text/html;charset=utf-8");
/*Llamamos al archivo de inicio de sesión*/
require_once("../connect.php");
$rut = $_POST["rut"];
$password = $_POST["pass"];
/*Consulta de mysql con la que indicamos que necesitamos que seleccione
**solo los campos que tenga como nombre_administrador el que el formulario
**le ha enviado*/ 
$result = mysql_query("SELECT * FROM jefe WHERE rut = '$rut'");
//Validamos si el nombre del administrador existe en la base de datos o es correcto
if($row = mysql_fetch_array($result))
{     
//Si el usuario es correcto ahora validamos su contraseña
 if($row["password"] == $password)
 {
  //Creamos sesión
  session_start();  
  //Almacenamos el nombre de usuario en una variable de sesión usuario
  //Redireccionamos a la pagina: index.php
  header("Location: intranet_jefe.php");
 }
 else
 {
  //En caso que la contraseña sea incorrecta enviamos un msj y redireccionamos a login.php
  ?>
   <script languaje="javascript">
    alert("Usuario o contraseña Incorrecto");
    location.href = document.referrer;
   </script>
  <?
            
 }
}
else
{
 //en caso que el nombre de administrador es incorrecto enviamos un msj y redireccionamos a login.php
?>
 <script languaje="javascript">
  alert("Usuario o contraseña Incorrecto");
  location.href = document.referrer;
 </script>
<?           
}

//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
mysql_free_result($result);

/*Mysql_close() se usa para cerrar la conexión a la Base de datos y es 
**necesario hacerlo para no sobrecargar al servidor, bueno en el caso de
**programar una aplicación que tendrá muchas visitas ;) .*/
mysql_close();
?>

