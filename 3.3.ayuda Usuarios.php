
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
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
        .tabla{
            width: 100%;
        }
        
        th, td {
            font-size: 12px;
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            font-size: 12px;
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
session_start();

require "3.1 Encabezado.php";

echo"<h6 id='titulo'>Usuarios</h6>";
       include('db.php');

        $consulta="SELECT *FROM info_usuario;";     
        $resultado_consulta= mysqli_query($conexion, $consulta);
        $consulta2="SELECT *FROM usuario;";
        $resultado_consulta2= mysqli_query($conexion, $consulta2);
        
        echo "<table id='tabla'>";
        echo "<tr>";
        echo "<th>ID del usuario</th>";
        echo "<th>Ci</th>";
        echo "<th>User Name</th>";
        echo "<th>Correo Electronico</th>";
        echo "<th>Nombres</th>";
        echo "<th>Apellido Paterno</th>";
        echo "<th>Apellido Materno</th>";
        echo "<th>Telefono</th>";
        echo "<th>Direccion</th>";
        echo "<th>Hukkoins</th>";
        echo "<th>Fecha de nacimiento</th>";
        echo "<th colspan='2'>opciones</th>";
       
        echo "</tr>";
        
        While( $registro = mysqli_fetch_array($resultado_consulta)and $registro2= mysqli_fetch_array($resultado_consulta2)){
            echo "<tr>";
            echo"<td>".$registro['usuario_idusuario']."</td>";
            echo"<td>".$registro['ci']."</td>";
            echo"<td>".$registro2['usrname']."</td>";
            echo"<td>".$registro2['correo_usuario']."</td>";
            echo"<td>".$registro['nombres']."</td>";
            echo"<td>".$registro['ap_p']."</td>";
            echo"<td>".$registro['ap_m']."</td>";
            echo"<td>".$registro['telefono']."</td>";
            echo"<td>".$registro['direccion']."</td>";
            echo"<td>".$registro['Hukkoins']."</td>";
            echo"<td>".$registro['fecha_n']."</td>";
echo "</tr>";
                        
        }
        echo "</table>";
       


    require "3.7 pie de pagina.php";
?>
</body>
</html>

<?php
session_start();
include 'db.php';

require "3.1 Encabezado.php";


if (!isset($_SESSION['idusuario']) ) {    
    header('Location: 1.1.1 Registrarusr.php');
    exit();
}
if ($_SESSION['rol']!=2){
    header('Location: 2.3 Huk Kallpalla.php');
    exit();
}

$sql = "SELECT  * FROM usuario";

$result = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h2>Usuarios Registrados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>email</th>
            <th>Contraseña</th>
            <th>Rol</th>
            <th>Monedas</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if ($row['rol']==2)
                {
                    $rol="Usuario Registrado";
                }
                if ($row['rol']==3)
                {
                    $rol="Administrador";
                }
                $ci=$row['idusuario'];
                $sql2="SELECT * FROM informacionusuario WHERE ci='$ci'";
                $informaciones = $conexion->query($sql2);
                if ($informaciones->num_rows > 0) {
                    $info = $informaciones->fetch_assoc();
                    $estado=$info["estado"];
                    $monedas=$info['monedas'];        
                } 
                echo "<tr><td>" . $row["idusuario"]. "</td>
                <td>" . $row["correo_electronico"]. "</td>
                <td>" . $row["contrasenia"]. "</td>
                <td>" . $rol. "</td>
                <td>" . $monedas. "</td>";
                if($estado==1) {
                    echo "<td>Activo</td>";
                    echo "<td><a href='3.3.2 UsuarioBloq.php?id=".$row['idusuario']."'>Bloquear Usuario</a>&nbsp;";
                }
                else{
                    echo "<td>Bloqueado</td>";
                    echo "<td><a href='desbloquearUsuario.php?id=".$row['idusuario']."'>Desbloquear Usuario</a> &nbsp;";
                }
                echo "<a href='3.3.4 Usuariospluskoins.php?id=".$row['idusuario']."'>Aumentar Monedas</a>";
                echo "<a href='3.3.4 Usuariosminuskoins.php?id=".$row['idusuario']."'>Disminuir Monedas</a>";
                echo "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay usuarios registrados</td></tr>";
        }
        ?>
    </table>
        <a href="3.2 Huk Kallpalla.php">
           <button>
                volver al Menu
            </button> 
        </a>
    <?php
    $conexion->close();
    ?>
Click here to <a href="logout.php" title="Logout"><button>Logout</button>
</body>
</html>