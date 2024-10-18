<?php
session_start();

include('db.php');

//recupera datos 
//isset es para la ausencia de un valor y empty para que no este vacio
//isset permite ver q no son nulos y empty para que no esten vacios!!
       
        if(isset($_POST)&& !empty($_POST)){
          $ci=$_POST['ci'];
        $nombres = $_POST['nombres'];
        $ap_p = $_POST['ap_p'];
        $ap_m = $_POST['ap_m'];
        $usrnamer=$_POST['usrname'];
        $telefono = $_POST['telefono'];
        $correo_usuario=$_POST['correo_usuario'];
        $direccion = $_POST['direccion'];
        $fecha_n = $_POST['fecha_n'];
        $contrasenia_usuario = $_POST['contrasenia_usuario'];
        $_SESSION['usrname']=$usrnamer;
                //$contrasenia_usuario = hash('sha512',$_POST['contrasenia_usuario']);


        //introduce datos al registro de la base de datos
        $consulta="INSERT INTO usuario (`idusuario`, `usrname`, `correo_usuario`, `contrasenia`)VALUES(0,'$usrnamer','$correo_usuario','$contrasenia_usuario');";
        $consulta2="INSERT INTO info_usuario(`ci`, `nombres`, `ap_p`, `ap_m`, `telefono`, `direccion`, `Hukkoins`, `fecha_n`, `rol`,`estado`, `usuario_idusuario`) VALUES('$ci','$nombres','$ap_p','$ap_m','$telefono','$direccion',0,'$fecha_n',2,1,0);"; //el 0 significa que ya esta autoincrementado
        $_SESSION['rol']=2;
        // el 2 por inercia muestra el rol de usuario normal, el 3 es de administrador

        
        if (mysqli_query($conexion, $consulta) === TRUE && mysqli_query($conexion, $consulta2) === TRUE) {

          header("location:2.3 Huk Kallpalla.php");


          exit(); // Asegúrate de salir después de la redirección

          
    
      } else {
          echo "Error: " . mysqli_error($conexion);
      }
      
      $conexion->close();
        }
        

?>