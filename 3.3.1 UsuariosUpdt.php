<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
        #formproductos {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

form {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    max-width: 500px;
    margin: 0 auto;
}
#formulario{
    display: flex;
    margin-top: 12px;
    margin-bottom: 12px;
}


label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
}

.boton-agregar {
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
.boton-agregar:hover {
    background-color: #003634; 
    transform: translateY(-3px);
}
.boton-agregar:active {
    transform: translateY(2px);
} 
.boton-agregar a {
    color: white;
    text-decoration: none;

}
 
    </style>
    <body id="formusuario">       
        <?php
        
session_start();

require "3.1 Encabezado.php";


         include('db.php');

        $idModificar= $_GET['id'];
        
        $consulta="SELECT *FROM info_usuario;";     
        $resultado_consulta= mysqli_query($conexion, $consulta);
        $consulta2="SELECT *FROM usuario;";
        $resultado_consulta2= mysqli_query($conexion, $consulta2);
        
        $registro= mysqli_fetch_array ($resultado_consulta);//de info usuario
        $registro2= mysqli_fetch_array($resultado_consulta2);//de usuario
        
        ?>
         <div id="formulario">
            <form method="POST"> 
         <center><h2>Actualizar Usuario</h2></center><br>
         <input type="hidden" name="id" value="<?php echo $registro['usuario_idusuario'] . ',' . $registro2['idusuario']; ?>"> 
            C.I. del usuario:
            <input type="text" name="CI" value="<?php echo $registro['ci']?>"><br><br>
            User Name:
            <input type="text" name="usernm" value="<?php echo $registro2['usrname']?>"><br><br>
            Correo Electronico:
            <input type="text" name="corr" value="<?php echo $registro2['correo_usuario']?>"><br><br>
            Nombre del usuario:
            <input type="text" name="noms" value="<?php echo $registro['nombres']?>"><br><br>
            Apellido Paterno del usuario:
            <input type="text" name="App" value="<?php echo $registro['ap_p']?>"><br><br>
            Apellido Materno del usuario:
            <input type="text" name="Apm" value="<?php echo $registro['ap_m']?>"><br><br>
            Telefono del usuario:
            <input type="text" name="telf" value="<?php echo $registro['telefono']?>"><br><br>
            Dirección del usuario:
            <input type="text" name="direc" value="<?php echo $registro['direccion']?>"><br><br>
            Hukkoins del usuario:
            <input type="text" name="koins" value="<?php echo $registro['Hukkoins']?>"><br><br>
            Fecha de Nacimiento del usuario:
            <input type="text" name="fechan" value="<?php echo $registro['fecha_n']?>"><br><br>
            
            
            <input class='boton-agregar' type="submit" value="Guardar Cambios">
        </form></div>
        <?php 
         if(isset($_POST)&& !empty($_POST)){
         $ci=$_POST['CI'];
        $usrname = $_POST['usernm'];
        $correo_usuario=$_POST['corr'];
        $nombres = $_POST['noms'];
        $ap_p = $_POST['App'];
        $ap_m = $_POST['Apm'];
        $telefono = $_POST['telf'];
        $direccion = $_POST['direc'];
        $Hukkoins = $_POST['koins'];
        $fecha_n = $_POST['fechan'];
        $idEditar=$_POST['id'];

        $consulta03 = "UPDATE info_usuario SET ci='$ci',nombres='$nombres',ap_p='$ap_p',ap_m='$ap_m',telefono='$telefono',direccion='$direccion',Hukkoins='$Hukkoins',fecha_n='$fecha_n' WHERE usuario_idusuario= $idEditar;";
        $consulta04="UPDATE usuario SET usrname=$usrname,correo_usuario='$correo_usuario' WHERE id_usuario= $idEditar";
        $resultado_consulta3=mysqli_query($conexion,$consulta03);
        $resultado_consulta4=mysqli_query($conexion,$consulta04);
        
        if($resultado_consulta3 && $resultado_consulta4 == TRUE){
            echo "<br><br><center>Se añadió correctamente!</center>";
             echo "<center><button class='boton-agregar' ><a href='3.3 Usuarios.php'>Regresar a inicio</a></button></center> ";
            

        }else {
            echo"<br><br><center>hubo problemas al actualizar el registro del producto</center>";
        }
        
      
         }

         require "3.7 pie de pagina.php";
        ?>
    </body>
</html>
