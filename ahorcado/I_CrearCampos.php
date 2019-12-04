<html>
<head>
  <title> Crear Categorias </title>
  <link href="estilo/estilo.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div style="display:inline-block">
 <form method="post" action="P_AgregarCampos.php" class="form-register" onSubmit="return validar();">
Categoria   :<input type="Text" name="categoria" id="categoria" placeholder="categoria" class="input-48" required="">
Numero   :<input type="Text" name="Numero" id="Numero" placeholder="Numero" class="input-48"><br>
<input type="Submit" name="enviar" value="Nueva partida">
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