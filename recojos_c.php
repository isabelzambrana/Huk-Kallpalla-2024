<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    require "3.1 Encabezado.php";

    echo "<h2>Añade un nuevo recojo</h2><br><br>";
    ?>
        <form method="POST">
           Fecha del recojo:
           <input type="date" name="fecha" required><br><br>
           Cantidad del recojo:
           <input type="number" name="cant" required><br><br>
           <input type="submit" value="Guardar registro">
        </form>
    <?php
       include('db.php');
       session_start();
    
 
        if(isset($_POST) && !empty($_POST)){
            $fecha = $_POST['fecha'];
            $cantidad = $_POST['cant'];
            $usuario_idusuario = $_SESSION['usrname'];


            // Corrigiendo la consulta para especificar las columnas y agregar comillas alrededor de fecha
            $consulta = "INSERT INTO recojo (fecha, cantidad, usuario_idusuario) VALUES ('$fecha', '$cantidad', '$usuario_idusuario');"; // 0 para id si es autoincremental
            $resultado_consulta = mysqli_query($conexion, $consulta);
        
            if($resultado_consulta){
                echo "El recojo fue correctamente añadido";
                echo "<button id='boton-agregar'><a href='3.4 Compost.php'>Regresar a inicio</a></button>";
            } else {
                echo "Hubo problemas al registrar el nuevo recojo";
            }
        }
        
        require "3.7 pie de pagina.php";
    ?>
    </body>
</html>
