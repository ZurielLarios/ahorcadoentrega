<html>
<head>
  <title> Borrar Categoria </title>
  <link href="estilo/estilo.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div style="display:inline-block">
     <form method="post" action="P_BorrarCampos.php">
      id de la categoria que desea eliminar   :<input type="Text" name="id" id="id" placeholder="id" class="input-48" required="">
      <br>
     <input type="submit" value="Borrar Categoria" />
     </form>
     
</div>
<div>
  <table border="1" style="text-align: center;">
    <tr>
      <td>id</td>
      <td>texto</td>
    </tr>

    <?php 
include ('conf/config.inc.php');

    $sql="SELECT * from categorias";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){
     ?>

    <tr>
      <td><?php echo $mostrar['idCategorias'] ?></td>
      <td><?php echo $mostrar['textoCategorias'] ?></td>
    </tr>
  <?php 
  }
   ?>
  </table>
</div>
</body>
</html>