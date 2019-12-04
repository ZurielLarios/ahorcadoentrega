<?php
//Se inclue el archivo de la conexion
include ('conf/config.inc.php');
            if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }
			//Se declaran las variables a usar (las cuales estan en el formulario)
                $id = $_POST['id'];
            //Sentencia para Borrar
                $sql = "DELETE FROM categorias WHERE idCategorias = $id";
           //En caso de ser verdadera mostrara el primer echo, en caso contrario el else
                if($conexion->query($sql) === true){
                    echo '<p> Los datos se han eliminado correctamente </p>';
                }else{
                    die("Error al eliminar datos: " . $conexion->error);
                }
                $conexion->close(); //Se cierra la conexion
?>