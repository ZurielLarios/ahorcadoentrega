<?php
//Se incluye el archivo para la conexion con la base da datos y despues se verifica
include ('conf/config.inc.php');
            if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }
                $nombre = $_POST['nombre'];
                //Sentencia para eliminar la tabla
                $sql = "DROP TABLE IF EXISTS $nombre";
                //Se verifica la conexion al hacer la sentencia
				//En caso de ser verdadera mostrara el primer echo, en caso contrario el else
                if($conexion->query($sql) === true){
                    echo '<p> La tabla se ha eliminado correctamente </p>';
                }else{
                    die("Error al eliminar tabla: " . $conexion->error);
                }
                $conexion->close(); //Se cierra la conexion
?>