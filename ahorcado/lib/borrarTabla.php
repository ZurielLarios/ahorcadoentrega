<?php
include ('conf/config.inc.php');
            if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }
                $id = $_POST['id'];
                
                $sql = "DELETE FROM categorias WHERE idCategorias = $id";
                
                if($conexion->query($sql) === true){
                    echo '<p> Los datos se han eliminado correctamente </p>';
                }else{
                    die("Error al eliminar datos: " . $conexion->error);
                }
                $conexion->close();
?>