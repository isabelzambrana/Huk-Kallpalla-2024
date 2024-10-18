<?php
 require 'db.php';
    session_start();
$current_user_id=$_SESSION['idUser'];
$sql_estado="SELECT * FROM info_usuario WHERE ci='$current_user_id'";
$info= $conn->query($sql_estado);
if ($info->num_rows > 0) {
    $informacion = $info->fetch_assoc();
    $estado=$informacion["estado"];
    if ($estado==-1)
    {
        header('Location: 2.0 Bloqueado.php');
    }
}

?>