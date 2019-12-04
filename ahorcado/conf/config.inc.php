<?php
  $conexion= new mysqli("localhost", "usuario", "1234", "ahorcado");
  //comprobacion de conexion
  if(mysqli_connect_errno())
  {
    prinf("fallo");
  }
  else {
  }
mysqli_set_charset( $conexion, 'utf8');

include_once("lib/tpl.inc.php");

session_start();
$tpl = new tpl("")
?>