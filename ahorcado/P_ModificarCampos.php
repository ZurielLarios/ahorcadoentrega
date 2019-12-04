<?php
//Se inclue el archivo de la conexion
include ('conf/config.inc.php');
            if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }
			//Se declaran las variables a usar (las cuales estan en el formulario)
                $id = $_POST['id'];
                $new = $_POST['new'];
				//Sentencia para insertar
                $sql = "UPDATE categorias SET textoCategorias='$new' where idCategorias='$id'";
                //En caso de ser verdadera mostrara el primer echo, en caso contrario el else
                if($conexion->query($sql) === true){
                    echo '<p> Los datos se han acualizado correctamente </p>';
                }else{
                    die("Error al insertar datos: " . $conexion->error);
                }
                $conexion->close(); //Se cierra la conexion
?>