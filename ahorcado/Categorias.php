<!DOCTYPE html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ahorcado</title>
<!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css">!-->
<link href="estilo/estilo.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="todo">
  <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
    <thead>
      <th>No.</th>
      <th>Palabras</th>
      <th> <a href="I_CrearTablas.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
    </thead>
      
      
    <?php
    include "conf/config.inc.php";
    $sentencia="SELECT * FROM animales";
    $resultado=$conexion->query($sentencia) or die (mysqli_error($conexion));
    while($filas=$resultado->fetch_assoc())
    {
        echo "<tr>";
          echo "<td>"; echo $filas['Idpalabra']; echo "</td>";
          echo "<td>"; echo $filas['textopalabra']; echo "</td>";
          echo "<td>  <a href='I_ModificarTablas.php?no=".$filas['Idpalabra']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='I_BorrarTablas.php?no=".$filas['textopalabra']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
    </table>
</div>


</body>
</html>
