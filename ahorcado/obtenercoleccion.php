
<?php
include ('conf/config.inc.php');
$cadena="SELECT table_name AS 'coleccion' FROM information_schema.tables WHERE table_type ='base table'
AND table_schema = 'ahorcado' ORDER BY table_name;";
$resultado = mysqli_query($conexion, $cadena);
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
		echo ("no hay colecciones que mostrar");
	}
	mysqli_free_result($resultado);
}//resultado
mysqli_close($conexion);
	


?>
