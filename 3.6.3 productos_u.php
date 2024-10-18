<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
        #formproductos {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

form {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    max-width: 500px;
    margin: 0 auto;
}
#formulario{
    display: flex;
    margin-top: 12px;
    margin-bottom: 12px;
}


label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
}

.boton-agregar {
    background-color: #68ca41;
    text-align: center;
    color: white;
    border: none;
    font-size: 2vh;
    border-radius: 10px;
    margin: 20px;
    padding: 10px;
    cursor: pointer;
    transition: all 0.3s;
    outline: none;
}
.boton-agregar:hover {
    background-color: #003634; 
    transform: translateY(-3px);
}
.boton-agregar:active {
    transform: translateY(2px);
} 
.boton-agregar a {
    color: white;
    text-decoration: none;

}
 
    </style>
    <body id="formproductos">       
        <?php

require "3.1 Encabezado.php";


         include('db.php');

        $idModificar= $_GET['id'];
        $consulta = "SELECT *FROM producto WHERE idproducto=$idModificar;";
        $resultado_consulta =mysqli_query($conexion,$consulta);
        $registro = mysqli_fetch_array ($resultado_consulta);
        
        ?>
         <div id="formulario">
            <form method="POST"> 
         <center><h2>Actualizar un producto</h2></center><br>
            <input type="hidden" name="id" value="<?php echo $registro['idproducto'];?>">  
            Nombre del producto:
            <input type="text" name="nomp" value="<?php echo $registro['nombre']?>"><br><br>
            Precio del producto:
            <input type="text" name="prec" value="<?php echo $registro['precio']?>"><br><br>
            Cantidad del producto:
            <input type="text" name="cant" value="<?php echo $registro['cantidad']?>"><br><br>
            Imagen del producto:
            <input type="text" name="img" value="<?php echo $registro['img_producto']?>"><br><br>
            <input class='boton-agregar' type="submit" value="Guardar Cambios">
        </form></div>
        <?php 
         if(isset($_POST)&& !empty($_POST)){
        $nombre = $_POST['nomp'];
        $precio = $_POST['prec'];
        $cantidad = $_POST['cant'];
        $imagen = $_POST['img']; 
        $idEditar=$_POST['id'];
        
        $consulta02 = "UPDATE producto SET nombre='$nombre',precio=$precio,cantidad='$cantidad',img_producto='$imagen' WHERE idproducto= $idEditar;";
        $resultado_consulta=mysqli_query($conexion,$consulta02);
        
        if($resultado_consulta){
            echo "<br><br><center>Se añadió correctamente!</center>";
             echo "<center><button class='boton-agregar' ><a href='3.6 Productos.php'>Regresar a inicio</a></button></center> ";
            

        }else {
            echo"<br><br><center>hubo problemas al actualizar el registro del producto</center>";
        }
        
      
         }

         require "3.7 pie de pagina.php";
        ?>
    </body>
</html>
