<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>CRUD-Create,Read, Update, Delete</h2> 
       <?php
       include('db.php');

        $consulta="SELECT *FROM producto;";
        $resultado_consulta= mysqli_query($conexion, $consulta);
        
        echo "<a href='c_productos.php'>Agregar nuevo producto</a>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Codigo</th>";
        echo "<th>Nombre</th>";
        echo "<th>Precio</th>";
        echo "<th>Cantidad</th>";
        echo "<th>img_producto</th>";
       
        echo "</tr>";
        
        While($registro = mysqli_fetch_array($resultado_consulta)){
            echo "<tr>";
            echo"<td>".$registro['idproducto']."</td>";
            echo"<td>".$registro['nombre']."</td>";
            echo"<td>".$registro['precio']."</td>";
            echo"<td>".$registro['cantidad']."</td>";
            echo"<td>".$registro['img_producto']."</td>";

            echo"<td><a href='u_productos.php?id=".$registro['idproducto']."'>Modificar</a></td>";
            echo"<td><a href='d_productos.php?id=".$registro['idproducto']."'>Eliminar</a></td>";
            echo "</tr>";
                        
        }
        echo "</table>";
        
        ?>
    </body>
</html>
