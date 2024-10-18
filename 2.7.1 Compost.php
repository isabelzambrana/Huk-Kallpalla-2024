<?php
session_start();

include('db.php');

// recupera datos 
if (isset($_POST) && !empty($_POST)) {
    $fecha = $_POST['fecha'];
    $cantidad = $_POST['cant'];
    $usuario_idusuario = $_SESSION['usrname'];

    // introduce datos al registro de la base de datos
    $consulta = "INSERT INTO recojo (fecha, cantidad, usuario_idusuario) VALUES ('$fecha', '$cantidad', '$usuario_idusuario');";

    if (mysqli_query($conexion, $consulta) === TRUE) {
        // Redirigir a la página deseada
        header("location:2.7 Compost.php");
        exit(); // Asegúrate de salir después de la redirección
    } else {
        echo "Error: " . mysqli_error($conexion);
    }

    $conexion->close();
}
?>
