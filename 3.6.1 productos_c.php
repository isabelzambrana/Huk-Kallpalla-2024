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
