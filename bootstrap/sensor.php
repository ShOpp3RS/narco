<?php
// Parametros de base de datos
$mysql_servidor = "localhost";
$mysql_base = "modulo";
$mysql_usuario = "root";
$mysql_clave = "siclaro";

$conexion = mysqli_connect($mysql_servidor,$mysql_usuario,$mysql_clave,$mysql_base);

//tabla datos
//$id = htmlspecialchars($_GET["id"],ENT_QUOTES);
//$temperatura = $_GET["temperatura"];
//$humedad = $_GET["humedad"];
//$luminosidad = htmlspecialchars($_GET["luminosidad"],ENT_QUOTES);

 $temperatura = $_POST['temperatura'];
 $humedad = $_POST['humedad'];


echo $temperatura;
echo $humedad;


//$sqlt = "INSERT INTO datos ('id','fecha','temperatura','humedad') values (NULL,NULL,'".$temperatura."','".$humedad."')";

$sqlt = "INSERT INTO `datos` (`id`, `fecha`, `temperatura`, `humedad`) VALUES (NULL, CURRENT_TIMESTAMP, '$temperatura' , '$humedad');";
mysqli_query($conexion,$sqlt);

mysqli_close($conexion);

?>