<?php
//Se inclue el archivo de la conexion
include ('conf/config.inc.php');
            if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }
                $nombre = $_POST['nombre'];
				$new = $_POST['new'];
                //Sentencia para renombrar
                $sql = "RENAME TABLE ahorcado.{$nombre} TO ahorcado.{$new};";
                
				//En caso de ser verdadera mostrara el primer echo, en caso contrario el else
                if($conexion->query($sql) === true){
                    echo '<p> La tabla se ha eliminado correctamente </p>';
                }else{
                    die("Error al eliminar tabla: " . $conexion->error);
                }
                $conexion->close(); //Se cierra la conexion
?>