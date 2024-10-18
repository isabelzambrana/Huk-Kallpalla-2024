<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
  margin: 0;
  padding: 0;
  font-family: 'Poppings', sans-serif;
  text-decoration: none;
}
.H1 {
  text-align: center;
  margin: 1%;
  padding: 1%;
  font-size: 2.5rem;
  color: #37704f; 
  border-top-style: solid;
}
#servicios {
 display: grid;
 grid-template-columns: 50% 50%;
 grid-template-rows: 50vh 50vh 50vh;
}
.texto {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #c7b69f;
  text-align: center;
  position: relative;
}
.descripS {
  padding: 10vh;
  font-size: 1.2rem;
  text-align:justify;
  text-align-last: center;
}
.imagen {
  object-fit: cover;
  width: 100%;
  height: 100%;
}
.tituloS,.descripS {
  position: absolute;
  transition: opacity 0.5s;
}
.descripS {
  opacity: 0;
}
.texto:hover .tituloS {
  opacity: 0;
}
.texto:hover .descripS {
  opacity: 1;
}
#e {
  padding: 2vh;
  font-size: 3vh;
}
button {
  background-color: #68ca41;
  text-align: center;
  color: white;
  border: none;
  font-size: 2vh;
  border-radius: 10px;
  padding: 10px;
  cursor: pointer;
  transition: all 0.3s ease;
  outline: none;
}
button:hover {
  background-color: #003634; 
  transform: translateY(-3px);
}
button:active {
  transform: translateY(2px);
} 
#productos {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
  height: fit-content;
  justify-content: center;
}
.contprod {
  background-color: #c6da44;
  border-radius: 15px;
  margin: 20px;
  width: 300px;
  display: flex;
  flex-direction: row;
  align-items: center;
  transition: transform 0.3s;
}
.contprod> img {
  width: auto;
  height: 150px;
  border-radius: 10px;
  margin-right: 15px;
}
.producto-info {
  display: flex;
  flex-direction: column; 
}

.contprod:hover {
  transform: scale(1.05); 
}

@media (max-width: 768px) {
#productos {
  gap: 20px;
}

.contprod {
  padding: 20px;
  width: 90%;
}
.descripS {
  padding: 20px;
  font-size: 0.9rem;
}
.tituloS{
  font-size: 1.2rem;
}
}

    </style>
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
    <img src="imgen/capacitacion.png" id="capI" class="imagen">
    <img src="imgen/taller2.jpg" id="talI" class="imagen">
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
    <img src="imgen/consulta2.JPG" class="imagen" id="conI">
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
             echo"<p >".$registro['precio']. "&nbspHukkonis. </p>";
             echo"<p >".$registro['cantidad']. "&nbsp Kg. </p>";
         echo"</div>";
     echo"</div>";

}
 echo"</section>";

require "1.6 pie de pagina.php"; ?>
</body>
</html>