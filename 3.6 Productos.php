<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #ffffff;
            margin: 20px;
            height: 100%;
        }
        #titulo {
            font-size: 30px;
            margin: 5px;
            text-align: center;
        }
        table {
            width: 100%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #74b72e;
            color: white;
        }
        tr:hover {
            background-color: #ddd;
        }
        #boton-agregar {
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
        #boton-agregar:hover {
            background-color: #003634; 
            transform: translateY(-3px);
        }
        #boton-agregar:active {
            transform: translateY(2px);
        } 
    </style>
</head>
<body>
<?php

require "3.1 Encabezado.php";

echo"<h6 id='titulo'>Productos</h6>";
       include('db.php');

        $consulta="SELECT *FROM producto;";
        $resultado_consulta= mysqli_query($conexion, $consulta);
        
        echo "<table>";
        echo "<tr>";
        echo "<th>Codigo</th>";
        echo "<th>Nombre</th>";
        echo "<th>Precio</th>";
        echo "<th>Cantidad</th>";
        echo "<th>imagen</th>";
        echo "<th colspan='2'>opciones</th>";
       
        echo "</tr>";
        
        While($registro = mysqli_fetch_array($resultado_consulta)){
            echo "<tr>";
            echo"<td>".$registro['idproducto']."</td>";
            echo"<td>".$registro['nombre']."</td>";
            echo"<td>".$registro['precio']."</td>";
            echo"<td>".$registro['cantidad']."</td>";
            echo"<td>".$registro['img_producto']."</td>";

            echo"<td><a href='3.6.3 productos_u.php?id=".$registro['idproducto']."'>Modificar</a></td>";
            echo"<td><a href='3.6.2 productos_d.php?id=".$registro['idproducto']."'>Eliminar</a></td>";
            echo "</tr>";
                        
        }
        echo "</table>";
        
        echo "<button id='boton-agregar'><a href='3.6.1 productos_c.php'>Agregar Producto</a></button>";




    require "3.7 pie de pagina.php";
?>
</body>
</html>
