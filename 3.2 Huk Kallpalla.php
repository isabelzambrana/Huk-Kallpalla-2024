<!DOCTYPE html>
<html lang="en">
<?php
require "db.php";
session_start();
$usrname=$_SESSION['usrname'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="3.2 Huk Kallpalla.css">
    <title>Huk Kallpalla</title>
</head>
<body id="principal">
    <?php require "3.1 Encabezado.php"; ?> 
    <section id="inicio">
        <div id="contenedor-textos">
            <h1 id="titulo">Huk Kallpalla</h1>
            <p id="saludo">¡Hola Admin!&nbsp<?php echo $usrname;?> </p>
        </div>
    </section>
    <?php require "3.7 pie de pagina.php"; ?> 
</body>
</html>