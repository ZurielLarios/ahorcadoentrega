<html>
<head>
  <title> Categorias </title>
  <link href="estilo/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div>
     <form method="post" action="P_ModificarCampos.php">
      id de la categoria que desea modificar   :<input type="Text" name="id" id="id" placeholder="id" class="input-48" required="">
      Nuevos texto de categoria  :<input type="Text" name="new" id="new" placeholder="new" class="input-48" required="">
     <input type="submit" value="Modificar Categorias" />
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