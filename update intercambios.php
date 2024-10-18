<?php 
        session_start();
        $conexion = mysqli_connect("localhost","root" , "" ,"db_2024_proyecto");
         if(isset($_POST) && !empty($_POST)){
            $usuario_idusuario = $_SESSION['usrname'];
            $fecha = $_POST['fecha'];
            $cantidad = $_POST['cant'];
            $producto_idproducto = $_POST['product'];
            $id = $_POST['id'];
            echo $fecha;
            // Corrigiendo la consulta para especificar las columnas y agregar comillas alrededor de fecha
            $consulta = "UPDATE intercambio SET  usuario_idusuario = '$usuario_idusuario', fecha = '$fecha' ,  cantidad ='$cantidad', producto_idproducto ='$producto_idproducto'  WHERE usuario_idusuario = '$id';";
            $resultado_consulta = mysqli_query($conexion, $consulta);
        
        if($resultado_consulta){
            echo "El registro del intercambio fue correctamente actualizado";
            echo "<button id='boton-agregar'><a href='3.5 Canje moneda.php'>Regresar a inicio</a></button>";


        }else {
            echo"hubo problemas al actualizar el registro del intercambio";
        }
        
      
         }

         require "3.7 pie de pagina.php";
        ?>