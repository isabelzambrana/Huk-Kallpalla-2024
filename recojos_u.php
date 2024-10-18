<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>       
        <?php

require "3.1 Encabezado.php";

echo"<h2>Actualizar un recojo</h2><br><br>";

         include('db.php');

        $idModificar= $_GET['id'];
        $consulta = "SELECT * FROM recojo WHERE idrecojo = '$idModificar';";
        $resultado_consulta =mysqli_query($conexion,$consulta);
        $registro = mysqli_fetch_assoc ($resultado_consulta);
        
        ?>
         <form method="POST"> 
            <input type="hidden" name="id" value="<?php echo $registro['idrecojo'];?>">  
            Fecha del recojo:
            <input type="text" name="fecha" value="<?php echo $registro['fecha']?>"><br><br>
            Cantidad del compost:
            <input type="text" name="cant" value="<?php echo $registro['cantidad']?>"><br><br>
            <input type="submit" value="Guardar Cambios">
        </form>
        <?php 
         if(isset($_POST)&& !empty($_POST)){
        $fecha = $_POST['fecha'];
        $cantidad = $_POST['cant'];
        $idEditar=$_POST['id'];
        $_POST['id'] = $idEditar;
        $consulta02 = "UPDATE recojo SET fecha='$fecha',cantidad='$cantidad' WHERE idrecojo= '$idEditar';";
        $resultado_consulta=mysqli_query($conexion,$consulta02);
        
        if($resultado_consulta){
            echo "El registro del recojo fue correctamente actualizado";
            echo "<button id='boton-agregar'><a href='3.4 Compost.php'>Regresar a inicio</a></button>";


        }else {
            echo"hubo problemas al actualizar el registro del recojo";
        }
        
      
         }

         require "3.7 pie de pagina.php";
        ?>
    </body>
</html>
