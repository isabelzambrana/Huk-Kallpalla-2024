<?php
    require 'db.php';
    session_start();
if (!isset($_SESSION['idusuario'])) {
    header('Location: 1.2 Registrarusr.php');
    exit();
}
    if ($_SESSION['rol']!=2){
        header('Location: 2.3 Huk Kallpalla.php');
    }
    
    $idUsuario = $_GET['id'];

    $sql = "UPDATE info_usuario SET estado=-1 where ci='$idUsuario'";

    if ($conn->query($sql) === TRUE) {
        echo "Se bloqueo el usuario!";
        header('Location: 3.3 Usuarios.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    
    $conexion->close();
?>