<?php
include ('conf/config.inc.php');
$cadena="SELECT * FROM {$_POST['cual']} ORDER BY RAND() LIMIT {$_POST['cuantas']};";
$resultado= mysqli_query ($conexion, $cadena);
if(!$resultado)
{
	echo mysqli_error($conexion);
}
else
{
	if(mysqli_num_rows($resultado)>0)
	{
		$respuesta = array();
	$respuesta = $resultado->fetch_all(MYSQLI_ASSOC);
	echo json_encode($respuesta);
	}
	else
	{
		echo ("no hay palabras en la coleccion");
	}
	mysqli_free_result($resultado);
}
mysqli_close($conexion);

?>