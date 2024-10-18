<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huk Kallpalla</title>
    <style>
    * {
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
  text-decoration: none;
}

#inicio {
  height: 100vh;
  background-image: url("imgen/fondo1.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

#contenedor-textos {
  display: flex;
  color: rgb(255, 255, 255);
  font-weight: 600; 
  padding: 20px;
  align-items: center;
  flex-direction: column;
  text-align: center;
  
}

#contenedor-textos > h1 {
  font-size: 7vh;
  color: white;
}

#contenedor-textos > p {
  font-size: 4vh;
  margin-top: 10px;
  color: white;
}

#contenedor-registro {
  height: 50px; 
  padding: 10px;
  border-radius: 50px;
  background-color: rgba(0, 0, 0, 0.62);
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.4s;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
  transform: scale(1);
}

#contenedor-registro:hover {
  box-shadow: 0 0 25px #ffffff;
  transform: scale(1.05);
}

#contenedor-registro > a {
  font-weight: bold;
  font-size: 1.6rem; 
  color: rgb(255, 255, 255);
}

#contenedor-registro > a:hover {
  text-shadow: 0 0 5px #ffffff, 0 0 10px #ffffff;
}

/* Media Queries para diseño responsivo */
@media (max-width: 768px) {
  #contenedor-textos > h1 {
    font-size: 6vh; 
  }
  
  #contenedor-textos > p {
    font-size: 3.5vh; 
  }
  
  #contenedor-registro {
    min-width: 120px; 
    height: 45px; 
  }

  #contenedor-registro > a {
    font-size: 1.4rem; 
  }
}

@media (max-width: 480px) {
  #contenedor-textos > h1 {
    font-size: 5vh; 
  }
  
  #contenedor-textos > p {
    font-size: 3vh; 
  }

  #contenedor-registro {
    min-width: 100px; 
    height: 40px; 
  }

  #contenedor-registro > a {
    font-size: 1.2rem; 
  }
}
    </style>
</head>
<body id="principal">
    <?php require "1.1 Encabezado.php"; ?>
    <section id="inicio">
        <div id="contenedor-textos">
            <h1>Huk Kallpalla</h1>
            <p>De vuelta a la tierra</p>
        </div>
        <div id="contenedor-registro">
            <a href="1.2 Registrarusr.php">Quiero unirme</a>
        </div>
    </section>
    <?php require "1.6 pie de pagina.php"; ?>
</body>
</html>