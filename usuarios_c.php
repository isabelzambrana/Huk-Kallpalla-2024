<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para registrar un nuevo usuario</title>
</head>
<body>  
<h1>Nuevo Usuario</h1>  
    <form  method="post" id="form_usuario">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="apellidoP">Apellido Paterno:</label>
        <input type="text" id="apellidoP" name="apellidoP" required><br><br>
        <label for="apellidoM">Apellido Materno:</label>
        <input type="text" id="apellidoM" name="apellidoM" required>
        <br><br>
        <label for="apellido">Fecha Nacimiento:</label>
        <input type="date" id="fecha" name="fecha" required>
        <br><br>
        <label for="nombre">Correo Electronico:</label>
        <input type="email" id="email" name="correo_usuario" required placeholder="sophie@example.com">
        <br><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required>
        <br><br>
        <label for="confirmacion">Repita la Contraseña:</label>
        <input type="password" id="confirmacion" name="confirmacion" required>
        
        <br><br>
        <input type="submit" value="Enviar" onclick="validarPasswords()">

    </form>
    
    <script type="text/javascript">
    function validarPasswords(){
  var pass = document.getElementById("contraseña").value;
  var repass = document.getElementById("confirmacion").value;

    if (pass!=repass) 
    {
        alert("Las Contraseñas no Coinciden");
    }
    else
    {
        document.getElementById("form_usuario").submit();
    }
}
</script>
<?php
    include 'db.php';
    
    if(isset($_POST)&& !empty($_POST)){
    $correo_usuario = $_POST['correo_usuario'];
    $nombres = $_POST['nombre'];
    $ap_p =$_POST['apellidoP'];
    $ap_m = $_POST['apellidoM'];
    $fecha=$_POST['fecha'];
    $contrasenia_usuario = $_POST['contraseña'];
    

    //$contraseña = hash('sha512',$_POST['contraseña']);
    $sql = "INSERT INTO usuario (idusuario, correo_usuario, contrasenia, rol) VALUES (0,'$correo_usuario', '$contrasenia_usuario',0)";
    $sql2 = "INSERT INTO info_usuario (idinfo_usuario,nombre, apellidoP,apellidoM,fechaN,monedas,estado,rol) VALUES (0,'$nombres', '$ap_p ', '$ap_m', '$fecha',0,1,0)";
    
    if ($conexion->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }if ($conexion->query($sql2) === TRUE) {
        echo "Nuevo registro creado exitosamente";
        header('Location: Productos.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    $conexion->close();
}
?> 

</body>
</html>
