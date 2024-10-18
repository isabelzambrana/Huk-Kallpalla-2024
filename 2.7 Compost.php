<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compost</title>
    <style>
        *{
  font-family: 'poppins' , sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

#ingreso{
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background-image: url(imgen/fondo1.jpg);
  background-size:cover;
  background-position: center;
}
header{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 20px 100px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  z-index: 99;
}

.logo{
  font-size: 2.3rem;
  color: white;
  user-select: none;
  cursor: pointer;
}
.navegacion>a{
  position: relative;
  font-size: 1rem;
  color: white;
  text-decoration: none;
  font-weight: 200;
  margin-left: 40px;
}
.navegacion>a::after{
  content: "";
  position: absolute;
  width: 100%;
  bottom: -6px;
  left: 0;
  height: 2px;
  background: white;
  transform: scaleX(0);
  transform-origin: right;
  transition: transform .4s;
}
.navegacion>a:hover::after{
  transform: scaleX(1);
  transform-origin: left;
}
.fondo{
  position: relative;
  width: 380px;
  height: 380px;
  background: transparent;
  border: 2px solid rgba(255,255,255,0.5);
  border-radius: 20px;
  backdrop-filter: blur(20px);
  box-shadow: 0 0 30px rgba(0,0,0,0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  transition: transform .5s ease height 0.2s ease;
  transform: scale(1);
}

.fondo.contenedor-form{
  width: 100%;
  padding: 40px;
}

.fondo .contenedor-form.login{
  transition: 0.17s ease;
  transform: translateX(0);
}

.fondo.active .contenedor-form.login{
  transition: none;
  transform: translateX(-400px);
}
.fondo.active .contenedor-form.registrar{
 transition: transform 0.17s ease;
 transform: translateX(0);
}
.fondo .contenedor-form h2 {
  font-size: 2em;
  color: #ffffff;
  text-align: center;
}

.contenedor-input{
  position: relative;
  width: 107%;
  height: 60px;
  border-bottom: 2px solid #ffffff;
  margin: 30px 0;
}

.contenedor-input label{
  position: absolute;
  top: 50%;
  left: 7px;
  transform: translateY(-50%);
  font-size: 1em;
  font-weight: 200;
  pointer-events: none;
  transition: 0.4s;
  color: #ffffff;
}

.contenedor-input input:focus~label, 
.contenedor-input input:valid~label{
  top: 0px;

}

.contenedor-input input{
  width: 110%;
  height: 110%;
  background: transparent;
  border: none;
  outline: none;
  font-size: 1em;
  color: #ffffff;
  padding: 0 35px 0 5px;
}

.contenedor-input .icono{
  position: absolute;
  right: 8px;
  font-size: 1.4em;
  color: #F1EFEF;
  line-height: 57px;
}

.recordar{
  font-size: 0.6em;
  margin: -14px 5% 10px;
  display: flex;
  justify-content: space-between;
  font-weight: 600;
}

.recordar label input{ 
  accent-color: #090f1d;
  margin-right: 3px;
}
.recordar a{
  color: #ffffff;
  left: 5%;
   margin: 1px 5% 0.5px;
  text-decoration: none;
}

.recordar a:hover{
   text-decoration: underline;
}

.btn{
  width: 100%;
  height: 40px;
  border: none;
  outline: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 1em;
  font-weight: bold;
  background-color: #000000;
  color: #F1EFEF;
}

.registrar{
  font-size: 0.9em;
  color: #F1EFEF;
  text-align: center;
  margin: 25px 0 10px;
}

.registrar p a{
  color: #F1EFEF;
  text-decoration: none;
}

.registrar p a:hover{
  text-decoration: underline;
  text-decoration-color: #ffffff;
  text-decoration-thickness: 2px;
  text-underline-offset: 4px;
}
#principal{
      display: grid;
      grid-template-rows: 115px 70vh;
      grid-template-columns: 100%;
      grid-template-areas:
        "enca"
        "sec1";
      gap: 6px;
  }
  @media (max-width: 768px) {
    #principal {
        grid-template-rows: 115px 80vh; 
        grid-template-areas:
            "enca"
            "sec1";
    }
}
    </style>
</head>
<body id="principal">
<?php require "2.1 Encabezado.php"; ?>
   <section id="ingreso">
        <div class="fondo">
        <div class="contenedor-form login">
    <h2>Recojo</h2>
    <form  method="POST" action="2.7.1 Compost.php">
      <div class="contenedor-input">
        <span class="icono"><i class="fa-solid fa-user"></i></span>
        <input type="number" required name="cant">
             <label for="#"> cantidad </label>
      </div>
      <div class="contenedor-input">
        <span class="icono"><i class="fa-regular fa-calendar-days"></i></span>
        <input type="date" required name="fecha">
             <label for="#"></label>
      </div>
               <button type="submit" class="btn">Enviar</button>
           <div class="registrar">
             <p><a href="2.6 Ecocanje.php" class="registrar-link">Volver</a></p>
           </div>
      </div>
       </form>
    <section>
<!-- Esto no se hered bien, wa -->
<?php //require "1.6 pie de pagina.php"; ?>
</body>
</html>