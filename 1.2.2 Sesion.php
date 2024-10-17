<?php
include('db.php');
session_start();

$usrname=$_POST['usrname'];
$correo_usuario=$_POST['correo_usuario'];
$contrasenia_usuario=$_POST['contrasenia_usuario'];

$consulta="SELECT*FROM usuario where usrname='$usrname'and correo_usuario='$correo_usuario' and contrasenia='$contrasenia_usuario'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
  $_SESSION['usrname']=$usrname;
    header("location:2.3 Huk Kallpalla.php");

}else{
    ?>
    <?php
    include("sesion.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);