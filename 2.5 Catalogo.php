<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="2.5 Catalogo.css" rel="stylesheet" type="text/css" />
    <title>Catalogo</title>
</head>
<body>
        <?php require "2.1 Encabezado.php"; ?>
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
<section id="productos">
    <div class="contprod">
        <img src="compost 1.png">
        <div class="producto-info">
            <h3>BIOL</h3>
            <p>1 litro: 15</p>
        </div>
    </div>
    <div class="contprod">
        <img  src="compost 2.png">
        <div class="producto-info">
            <h3>COMPOST</h3>
            <p>1 kilo: 10</p>
        </div>
    </div>
    
    <div class="contprod">
        <img src="compost 3.png">
        <div class="producto-info">
            <h3>HUMUS</h3>
            <p >1 kilo: 20</p>
        </div>
    </div>

    <div class="contprod">
        <img src="compost 4.png">
        <div class="producto-info">
            <h3>LOMBRICES</h3>
            <p class="DescripP">1 kilo: 30</p>
        </div>
    </div>
</section>
 <?php require "1.6 pie de pagina.php"; ?>
</body>
</html>