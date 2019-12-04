<?php
//Se inclue el archivo de la conexion
include ('conf/config.inc.php');
            if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }
			//Se declaran las variables a usar (las cuales estan en el formulario)
               $tabla = $_POST['tabla'];
//Sentencia para crear tabla
                $sql = "CREATE TABLE IF NOT EXISTS ahorcado.{$tabla} ( IdPalabra INT(3) NOT NULL AUTO_INCREMENT , textopalabra VARCHAR(16) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL , PRIMARY KEY (idPalabra), UNIQUE (textopalabra)) ENGINE = MyISAM;";
                
				//En caso de ser verdadera mostrara el primer echo, en caso contrario el else
                if($conexion->query($sql) === true)
                {
                    header('Location:/ahorcado/Categorias.php');
                }
                else
                {
                    die("Error al insertar datos: " . $conexion->error);
                }
                $conexion->close(); //Se cierra la conexion
?>