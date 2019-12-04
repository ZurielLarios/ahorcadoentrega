<?php
//Se inclue el archivo de la conexion
include ('conf/config.inc.php');
            if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }
			//Se declaran las variables a usar (las cuales estan en el formulario)
                $categoria = $_POST['categoria'];
                $Numero = $_POST['Numero'];
            //Sentencia para insertar
                $sql = "INSERT INTO categorias(textoCategorias, idCategorias)
                                    VALUES('$categoria','$Numero')";
            //En caso de ser verdadera mostrara el primer echo, en caso contrario el else
                if($conexion->query($sql) === true){
                    echo '<p> Los datos se han insertado correctamente </p>';
                }else{
                    die("Error al insertar datos: " . $conexion->error);
                }
                $conexion->close(); //Se cierra la conexion
?>