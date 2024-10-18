<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a2dd6045c4.js" crossorigin="anonymous"></script>
    <title>Registrarme</title>
</head>
<style>
  * {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
}

#ingreso {
  display: flex;
  height: 1350px;
  justify-content: center;
  align-items: center;
  background-image: url("imgen/fondo1.jpg");
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  flex-direction: column;
}

#fondo {
  display: flex;
  width: 400px;
  height: 1250px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 20px;
  backdrop-filter: blur(20px);
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
  justify-content: center;
  align-items: center;
}
#fondo.active {
  width: 400px;
  height: 890px;
}

#contenedor-form {
  width: 300px;
  height: 800px; /* Considera usar 'auto' para ajustarlo al contenido */
  padding: 45px;
}



#contenedor-form.registrar {
  width: 300px;
  height: 1199px;
  position: absolute;
  transition: none;
  transform: translateX(0px);
}

#fondo.active #contenedor-form.registrar {
  transition: transform 0.20s ease;
  transform: translateX(3);
}

#contenedor-form h2 {
  font-size: 2em;
  color: #ffffff;
  text-align: center;
}

#contenedor-input {
  position: relative;
  width: 100%; 
  height: 60px;
  border-bottom: 2px solid #ffffff;
  margin: 30px 0;
}

#contenedor-input label {
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

#contenedor-input input:focus ~ label, 
#contenedor-input input:valid ~ label {
  top: 0px;
}

#contenedor-input input {
  width: 100%; /* Changed to 100% for better responsiveness */
  height: 100%; /* Changed to 100% for better responsiveness */
  background: transparent;
  border: none;
  outline: none;
  font-size: 1em;
  color: #ffffff;
  padding: 0 35px 0 5px;
}

#contenedor-input .icono {
  position: absolute;
  right: 8px;
  font-size: 1.4em;
  color: #F1EFEF;
  line-height: 57px;
}

#recordar {
  font-size: 0.6em;
  margin: -14px 5% 10px;
  display: flex;
  justify-content: space-between;
  font-weight: 600;
}

#recordar label input {
  accent-color: #090f1d;
  margin-right: 3px;
}

#recordar a {
  color: #ffffff;
  margin: 1px 5% 0.5px;
  text-decoration: none;
}

#recordar a:hover {
  text-decoration: underline;
}

.btn{
    width: 100%;
    height: 30px;
    border: none;
    outline: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    font-weight: bold;
    background-color: #000000;
    color: #F1EFEF;
  }
  

#registrar {
  font-size: 0.9em;
  color: #F1EFEF;
  text-align: center;
  margin: 25px 0 10px;
}

#registrar p a {
  color: #F1EFEF;
  text-decoration: none;
}

#registrar p a:hover {
  text-decoration: underline;
  text-decoration-color: #ffffff;
  text-decoration-thickness: 2px;
  text-underline-offset: 4px;
}

/* Media Queries */
@media (max-width: 768px) {
  #fondo {
    width: 90%;
    height: auto;
  }

  #contenedor-form {
    padding: 20px;
  }
  

  #contenedor-input {
    width: 100%;
  }
  #contenedor-form.registrar {
    width: 400px; /* Ajusta según tus necesidades */
    height: auto; /* Permite que la altura se ajuste al contenido */
    position: absolute;
    transition: none;
    transform: translateX(450px);
}


  #contenedor-form h2 {
    font-size: 1.5em;
  }
}

@media (max-width: 480px) {
  #fondo {
    height: auto;
  }

  #btn {
    height: 40px;
    font-size: 0.9em;
  }

  #registrar {
    font-size: 0.8em;
  }
}
</style>
<body id="principal">
<?php
    require "1.1 Encabezado.php"; 
?>
<section id="ingreso">
  <div id="fondo">
<!--Form registrarse-->
<div id="contenedor-form" class="registrar"> 
  <h2>Registrarse</h2>
  <div id="registrar">
      <p>¿Tienes una cuenta? <a href="1.2.1 Sesion.php" class="login-link">Iniciar Sesión</a></p> 
    </div>
  <form  method="POST" action="1.2.1 Registrarusr.php">
  <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-user"></i></span>
      <input type="text" required name="ci">
      <label for="username">Carnet de Identidad</label>
    </div>
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-user"></i></span>
      <input type="text" required name="nombres">
      <label for="username">Nombre(s)</label>
    </div>
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-user"></i></span>
      <input type="text" required name="ap_p">
      <label for="text">Apellido Paterno</label> 
    </div>  
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-user"></i></span>
      <input type="text" required name="ap_m">
      <label for="text">Apellido Materno</label> 
    </div>  
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-user"></i></span>
      <input type="text" required name="usrname"><!--el required name es el nombre con el que se identifica dentro de la plataforma.-->
      <label for="username">Nombre de usuario</label>
    </div>
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-phone"></i></span>
      <input type="tel" required name="telefono" pattern="[0-9]*"><!--el  pattern="[0-9]* es para validar que sea un numero q no pase de los 9 digitos-->
      <label for="number">Teléfono</label> 
    </div>  
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-user"></i></span>
      <input type="text" required name="correo_usuario">
      <label for="username">Correo electronico</label>
    </div>
    
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-location-pin"></i></span>
      <input type="text" required name="direccion">
      <label for="text">Dirección</label> 
    </div>   
    <div id="contenedor-input">
    <span class="icono"><i class="fa-solid fa-calendar"></i></span>
    <input type="date" required name="fecha_n">
    <label for="fecha_n">Fecha de Nacimiento</label>
    </div>
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-lock"></i></span>
      <input type="password" required name="contrasenia_usuario">
      <label for="password">Contraseña</label> 
    </div>
    <div id="contenedor-input">
      <span class="icono"><i class="fa-solid fa-lock"></i></span>
      <input type="password" required name="confirmacion">
      <label for="password">Confirmar Contraseña</label> 
    </div>
    <div id="recordar">
      <label for="#"><input type="checkbox">Acepto los Términos y Condiciones</label>
    </div>
    <button type="submit" class="btn">Registrarme</button>
    
    <br><br>
  </form>
</div>


 
  <script type="text/javascript">
    function validarPasswords(){
  var pass = document.getElementById("contrasenia_usuario").value;
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


$("form").validardatos({
  rules:{
      ci:{
          required:true,
          number:true,
          maxlength:8
      },
      direccion:{
          required:true,
          minlength:5,
          maxlength:20
      },
      telefono:{
          required:true,
          number: true,
          maxlength:10
      },
      nombres:{
          required:true
      },
      ap_p:{
          required:true
      },
      ap_m:{
          required:true
      },
      usrname:{
          required:true,
      },
      fecha_n:{
          required:true,
          number:true
      },
      correo_usuario:{
          required:true
      },
      contrasenia_usuario:{
          required:true
      },
      confirmacion:{
          required:true
      }
  },
  messages:{
  ci:{
      required:"este campo no puede estar vacio.",
      number:"Ingrese su CI como un valor numérico",
      maxlength:"el maximo de numéros es 8."
  },
  direccion:{
      required:"este campo no puede estar vacio.",
      minlength:"el mínimo de letras es 5.",
      maxlength:"el maximo de letras es 20."
  },
  telefono:{
      required:"este campo no puede estar vacio.",
      number:"Ingrese su telefono como un valor numérico",
      maxlength:"el maximo de números es 10."
  },
  nombres:{
      required:"este campo no puede estar vacio."
  },
  ap_p:{
      required:"este campo no puede estar vacio."
  },
  ap_m:{
      required:"este campo no puede estar vacio."
  },
  usrname:{
      required:"este campo no puede estar vacio."
  },
  
  contrasenia_usuario:{
      required:"este campo no puede estar vacio."
      },
  correo_usuario:{
      required:"este campo no puede estar vacio."
  },
  confirmacion:{
      required:"este campo no puede estar vacio."
  }
  } 
 }
 )

 
</script>
</section>
<?php 
    require "1.6 pie de pagina.php";
?>
</body>
</html>
</script>
</section>
<?php 
    require "1.6 pie de pagina.php";
?>
</body>
</html>