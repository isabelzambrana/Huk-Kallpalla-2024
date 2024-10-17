<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <h2>Eliminar registro de un producto</h2>
        <?php
              include('db.php');
         
         $idEliminar= $_GET['id'];
         
         $consulta="DELETE FROM producto WHERE idproducto=$idEliminar;";
         
         $resultado_consulta=mysqli_query($conexion,$consulta);
         
         header('Location: ./3.6 Productos.php');
        ?>
    </body>
</html>
