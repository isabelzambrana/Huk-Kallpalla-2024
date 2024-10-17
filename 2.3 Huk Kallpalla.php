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
    <link rel="stylesheet" href="2.3 Huk Kallpalla.css">
    <title>Huk Kallpalla</title>
</head>
<?php
    require "2.1 Encabezado.php";

  
   
echo"<body id='principal'>";
  echo"<section id='inicio'>";
     echo"<div id='textos'>";
       echo"<h1>Huk Kallpalla</h1>";
       echo"<p>De vuelta a la tierra</p>";
       echo"<p>Bienvenid@ $usrname</p>";
     echo"</div>";
   echo"</section>";
 echo"</body>";

    require "1.6 pie de pagina.php";
    ?>
</html>