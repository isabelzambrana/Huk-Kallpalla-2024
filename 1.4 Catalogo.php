<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="1.4 Catalogo.css" rel="stylesheet" type="text/css" />
    <title>Catalogo</title>
</head>
<body>
        <?php require "1.1 Encabezado.php"; ?>
<h1 class="H1">SERVICIOS</h1>
<section id="servicios">
    <div class="texto">
        <h2 id="cap" class="tituloS">CAPACITACIONES</h2>
            <p class="descripS">Ofrecemos cursos educativos sobre la gestión sostenible de residuos 
                y la implementación de prácticas ecológicas en comunidades y organizaciones. 
                Nuestras capacitaciones están diseñadas para empoderar a los participantes con 
                conocimientos y habilidades en compostaje y relacionados.
            </p>
    </div>
    <img src="capacitacion.png" id="capI" class="imagen">
    <img src="taller2.jpg" id="talI" class="imagen">
    <div class="texto">
        <h2 id="tal"  class="tituloS">TALLERES</h2>
            <p class="descripS">Enseñamos a convertir los residuos orgánicos en compost y humus de alta calidad 
                mediante métodos naturales. Nuestros talleres incluyen teoría y práctica, 
                capacitando a los participantes para implementar técnicas de compostaje y 
                vermicompostaje en sus hogares, escuelas o comunidades, reduciendo así la cantidad 
                de residuos y mejorando la fertilidad del suelo.
            </p>
    </div>
    <div class="texto">
        <h2 id="con"  class="tituloS">CONSULTORÍAS</h2>
        <p class="descripS">Asesoramos a empresas, comunidades y gobiernos en la planificación e implementación 
            de proyectos verdes que promuevan la sostenibilidad y la economía circular. 
            Ayudamos a diseñar e implementar programas de compostaje, gestión de residuos, 
            huertos urbanos, y otras iniciativas ecológicas adaptadas a las necesidades locales.
        </p>
    </div>
    <img src="consulta2.JPG" class="imagen" id="conI">
</section>
<center><h2 id="e">¿Le interesa alguno de nuestros servicios?</h2></center>
<center><button>¡coticemos!</button></center>
<h1 class="H1">PRODUCTOS</h1>
<?php

include('db.php');

        $consulta="SELECT nombre, precio, img_producto, cantidad FROM producto";
        $resultado_consulta= mysqli_query($conexion, $consulta);
        echo"<section id='productos'>";
While($registro = mysqli_fetch_array($resultado_consulta)){
     echo"<div class='contprod'>";
         echo"<img src=".$registro['img_producto'].">";
         echo"<div class='producto-info'>";
           echo"<h3>".$registro['nombre']."</h3>";
             echo"<p >".$registro['precio']. "&nbspBs. </p>";
             echo"<p >".$registro['cantidad']. "&nbsp Kg. </p>";
         echo"</div>";
     echo"</div>";

}
 echo"</section>";

require "1.6 pie de pagina.php"; ?>
</body>
</html>