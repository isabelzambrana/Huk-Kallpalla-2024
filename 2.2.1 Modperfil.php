<!DOCTYPE html>
<html lang="es">
<?php
require "db.php";
session_start();
$usrname=$_SESSION['usrname'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
        }
        #waoos {
            display: flex;
            align-items: center;
            justify-content: center;

        }
        .form {
            border: 2px black;
            background-color: #b5bdab92;
            padding: 20px;
            margin: 30px;
            border-radius: 10px;
            width: 400px;
        }

        .input {
            width: 90%;
            margin: 1%;
            padding: 20px;
            border: none;
            border-bottom: 1px solid #000000;
            background-color: transparent;
        }
        .button {
            width: 130px;
            background-color: #68ca41;
            text-align: center;
            color: white;
            border: none;
            font-size: 1rem;
            border-radius: 10px;
            margin: 10px;
            padding: 10px;
            transition: all 0.3s;
        }
        .button:hover {
            background-color: #003634; 
            transform: translateY(-3px);
        }
        .button:active {
            transform: translateY(2px);
        } 
</style>
    </style>
</head>
<body>
<?php require "2.1 Encabezado.php";
    
    $sql1 = "SELECT idusuario, correo_usuario FROM usuario WHERE usrname = '$usrname'";
    $result = $conexion->query($sql1);
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        $idusuario = $usuario['idusuario'];
        $correo_usuario = $usuario['correo_usuario'];
    }
    
    $sql2 = "SELECT nombres, ap_p, ap_m, ci, telefono, direccion, fecha_n, hukkoins FROM info_usuario WHERE usuario_idusuario = $idusuario";
    $result2 = $conexion->query($sql2);
    if ($result2->num_rows > 0) {
        $perfil = $result2->fetch_assoc();
        $nombres = $perfil['nombres'];
        $ap_p = $perfil['ap_p'];
        $ap_m = $perfil['ap_m'];
        $ci = $perfil['ci'];
        $telefono = $perfil['telefono'];
        $direccion = $perfil['direccion'];
        $fecha_n = $perfil['fecha_n'];
        $monedas = $perfil['hukkoins'];
    }
?>
  <center><h2>EDITAR PERFIL</h2></center>
  <section id="waoos">
  <form  method="POST" action="3.3.1 UsuariosUpdt.php" class="form">
    <div>
        <input type="text" value="<?php echo $ci; ?>" class="input">
        <label for="username">Carnet de Identidad</label>
    </div>
    <div>
        <input type="text" value="<?php echo $nombres; ?>" class="input">
        <label for="username">Nombre(s)</label>
    </div>
    <div>
        <input type="text" value="<?php echo $ap_p; ?>" class="input">
        <label for="text">Apellido Paterno</label>
    </div>
    <div>
        <input type="text" value="<?php echo $ap_m; ?>" class="input">
        <label for="text">Apellido Materno</label>
    </div>
    <div>
        <input type="text" value="<?php echo $usrname; ?>" class="input">
        <label for="username">Nombre de usuario</label>
    </div>
    <div>
        <input type="tel" pattern="[0-9]*" value="<?php echo $telefono; ?>" class="input">
        <label for="number">Teléfono</label>
    </div></form>
    <form class="form">
    <div>
        <input type="text" value="<?php echo $correo_usuario; ?>" class="input">
        <label for="username">Correo electrónico</label>
    </div>
    <div>
        <input type="text" value="<?php echo $direccion; ?>" class="input">
        <label for="text">Dirección</label>
    </div>
    <div>
        <input type="date" value="<?php echo $fecha_n; ?>" class="input">
        <label for="fecha_n">Fecha de Nacimiento</label>
    </div>
    <div>
        <input type="password" class="input">
        <label for="password">Contraseña</label>
    </div>
    <div>
        <input type="password" class="input">
        <label for="password">Confirmar Contraseña</label>
    </div>    
    <br>
    <button class="button"><a href="2.2 perfil.php">Cancelar</button></a>
    <button class="button"><a href="2.2 perfil.php">Aceptar</a></button>
    </form></section>
    <?php require "1.6 pie de pagina.php"; ?>
</body>
</html>