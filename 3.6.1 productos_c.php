<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <link rel="stylesheet" href="3.6.1 productos_c.css">
    <body id="formproductos">
    <?php
    require "3.1 Encabezado.php";

?>

        <div id="formulario">
<form method="POST">
        <center><h2>Añade un nuevo producto</h2></center><br>
           Nombre del producto:
           <input type="text" name="nom"><br><br>
            Precio del producto:
           <input type="text" name="precio"><br><br>
            Cantidad del producto:
           <input type="text" name="cant"><br><br>
            imagen del producto:
           <input type="text" name="img"><br><br>
               
           <input class='boton-agregar' type="submit" value="Guardar registro">
        </form>
        </div>
        <?php
       include('db.php');
       
        if(isset($_POST)&& !empty($_POST)){
        $nombre = $_POST['nom'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cant'];
        $img_producto = $_POST['img'];

        
        $consulta="INSERT INTO producto VALUES(0,'$nombre',$precio,'$cantidad','$img_producto');"; //el 0 significa que ya esta autoincrementado
        $resultado_consulta=mysqli_query($conexion, $consulta);
        
        if($resultado_consulta){
            echo"<br><br><center>El producto fue correctamente añadido!</center>";
            echo "<center><button class='boton-agregar'><a href='3.6 Productos.php'>Regresar a inicio</a></button></center>";

            
        }else {
            echo"hubo problemas al registrar el nuevo producto";
        }
        }
        require "3.7 pie de pagina.php";
        ?>
    </body>
</html>
