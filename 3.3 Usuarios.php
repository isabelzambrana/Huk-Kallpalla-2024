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
            font-size: 13px;
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            font-size: 12px;            
            text-align: center;
            background-color: #74b72e;
            color: white;
        }
        tr:hover {
            background-color: #ddd;
        }
        
    </style>
</head>
<body>
<?php
session_start();

require "3.1 Encabezado.php";

echo"<h6 id='titulo'>Usuarios</h6>";
       include('db.php');
       
       //llamar tabla info_usuario
        $consulta="SELECT *FROM info_usuario;";     
        $resultado_consulta= mysqli_query($conexion, $consulta);
        
        //llamar tabla usuario        
        $consulta2="SELECT *FROM usuario;";
        $resultado_consulta2= mysqli_query($conexion, $consulta2);

        //modelo de tabla        
        echo "<table id='tabla'>";
        echo "<tr>";
        echo "<th>ID del usuario</th>";
        echo "<th>Rol</th>";
        echo "<th>Estado</th>";
        echo "<th>User Name</th>";
        echo "<th>Correo Electronico</th>";
        echo "<th>Telefono</th>";
        echo "<th>Direccion</th>";
        echo "<th>Hukkoins</th>";
        echo "<th colspan='4'>opciones</th>";
        echo "</tr>";
        //

        //while, cliente o admin??
        While( $registro = mysqli_fetch_array($resultado_consulta)and $registro2= mysqli_fetch_array($resultado_consulta2)){

            if ($registro['rol']==2)
                {
                    $rol="Cliente";
                }
                if ($registro['rol']==3)
                {
                    $rol="Administrador";
                }
            echo "<tr>";
            //
            echo"<td>".$registro['usuario_idusuario']."</td>";
            echo"<td>".$rol."</td>";
            
            //llamar para ver si esta activo o bloqueado
            $ci=$registro['usuario_idusuario'];
            $consultaa="SELECT * FROM info_usuario WHERE usuario_idusuario='$ci'";
            $result_consulta= mysqli_query($conexion, $consultaa);
            if ($result_consulta->num_rows > 0) {
                $info =mysqli_fetch_assoc($result_consulta);
                $estado=$info["estado"];    
            }

            if($estado==1) {
                echo "<td>Activo</td>";         
            }
            else{
                echo "<td>Bloqueado</td>";
                
            }
            //
            echo"<td>".$registro2['usrname']."</td>";
            echo"<td>".$registro2['correo_usuario']."</td>";
            echo"<td>".$registro['telefono']."</td>";
            echo"<td>".$registro['direccion']."</td>";
            echo"<td>".$registro['Hukkoins']."</td>";
            //opciones de admin
                //verusuario
            echo"<td><a href='3.3.1 UsuariosVer.php?id=".$registro['usuario_idusuario']."'>Ver usuario</a></td>";
               //aumentar monedas
            echo "<td><a href='3.3.3 Usuariospluskoins.php?id=".$registro['usuario_idusuario']."'>Aumentar Monedas</a></td>";
               //disminuir monedas
            echo "<td><a href='3.3.3 Usuariosminuskoins.php?id=".$registro['usuario_idusuario']."'>Disminuir Monedas</a></td>";
            //bloqueo o desbloqueo de usuarios
            if($estado==1) {
                echo "<td><a href='3.3.2 UsuarioBloq.php?id=".$registro['usuario_idusuario']."'>Bloquear Usuario</a>&nbsp;";
            }
            else{
                echo "<td><a href='3.3.2 desbloquearUsuario.php?id=".$registro['usuario_idusuario']."'>Desbloquear Usuario</a> &nbsp;";
            }
            echo "</tr>";
                        
        }
        echo "</table>";


    require "3.7 pie de pagina.php";
?>
</body>
</html>
