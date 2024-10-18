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
    <title>Perfil</title>
    <link rel="stylesheet" href="2.2 perfil.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif; 
}

#nosenose {
    display: flex;
    flex-direction: column;
    grid-area: sec1;
}

#perfil {
    background-image: url("imgen/fondo1.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 200px;
    display: flex;
    align-items: center; 
    justify-content: center; 
    transition: background-color 0.3s; 
}

#perfil > h1 {
    font-size: 3rem;
    color: white;
    font-weight: bold;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    text-align: center;
    transition: transform 0.3s;
}

#perfil > h1:hover {
    transform: scale(1.05); 
}

#info {
    text-align: left;
    font-size: 1.5rem;
    color: #bacb00; 
    padding: 20px;
    font-weight: bold;
    height: 500px;
    transition: background-color 0.3s; 
}

#info > p {
    margin-bottom: 20px;
    transition: color 0.3s; 
}

#info > p:hover {
    color: #5D378C; 
}

#principal {
    display: grid;
    grid-template-rows: 115px 720px 360px;
    grid-template-columns: 100%;
    grid-template-areas:
        "enca"
        "sec1"
        "pie";
    gap: 6px;
}
#boton {
  background-color: #68ca41;
  text-align: center;
  color: white;
  border: none;
  font-size: 2vh;
  border-radius: 10px;
  padding: 10px;
  cursor: pointer;
  transition: all 0.3s ease;
  outline: none;
}
#boton:hover {
  background-color: #003634; 
  transform: translateY(-3px);
}
#boton:active {
  transform: translateY(2px);
}
/* Responsive Design */
@media (max-width: 768px) {
    #perfil {
        height: 150px;
    }

    #perfil > h1 {
        font-size: 2.5rem;
    }

    #info {
        font-size: 1.2rem;
    }
}

@media (max-width: 480px) {
    #perfil {
        height: 120px; 
    }

    #perfil > h1 {
        font-size: 2rem;
    }

    #info {
        font-size: 1rem;
        padding: 10px;
    }
}
    </style>
</head>
<body>
    <?php require "3.1 Encabezado.php";

    $registro=$_GET["usuario_idusuario"];
    $sql1 = "SELECT idusuario, correo_usuario FROM usuario WHERE usrname = '$usrname'";
    $result = $conexion->query($registro);
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

    echo"<section id='nosenose'>";
    echo"<div id='perfil'>";
    echo"<h1>@$usrname</h1>";
    echo"</div>";
    echo"<div id='info'>";
    echo"<p><strong>Nombre:</strong> $nombres $ap_p $ap_m</p>";
    echo"<p><strong>Carnet de Identidad:</strong> $ci</p>";
    echo"<p><strong>Fecha de Nacimiento:</strong> $fecha_n</p>";
    echo"<p><strong>Teléfono:</strong> $telefono</p>";
    echo"<p><strong>Dirección:</strong>  $direccion</p>";
    echo"<p><strong>Correo Electrónico:</strong>  $correo_usuario</p>";
    echo"<p><strong>Contraseña:</strong> ********</p>";
    echo"<p><strong>Hukkoins:</strong> $monedas</p>";
   echo"</section>";

    require "1.6 pie de pagina.php"; ?>
</body>
</html>