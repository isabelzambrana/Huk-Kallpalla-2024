<!DOCTYPE html>
<html lang="es">
<?php

require "db.php";
$usrname=$_SESSION['usrname'];

$initial = strtoupper(substr($usrname, 0, 1)); // Extrae la inicial y la convierte a mayúscula

?>
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
            box-sizing: border-box; /* Asegurarse de que el padding y el margin se incluyan en el tamaño total */
        }

        header {
            padding: 20px 50px; 
            background-color: #ffffff;
            color: #000000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #contenedor-logo, #contenedor-menu {
            display: flex;
            align-items: center;
        }

        #logo {
            font-weight: bold;
            font-size: 15px; 
        }

        #menu {
            display: flex;
            flex-direction: column;
            align-items: flex-start; 
            transition: transform 0.5s ease-in-out; /* Transición suave para el menú */
        }

        #enlaces {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap; 
        }

        .enlaces {
            color: #000000;
            padding: 0 10px;
            transition: color 0.4s;
        }

        #mostrar-menu,
        #esconder-menu {
            font-size: 30px;
            cursor: pointer;
            display: none;
            transition: color 0.4s;
        }

        #menu .enlaces:hover,
        #mostrar-menu:hover,
        #esconder-menu:hover {
            color: #bacb00;
        }

        #check {
            display: none; 
        }

        /* Icono */
        #icono {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #bacb00;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 20px;
            transition: opacity 0.4s ease-in-out, transform 0.4s ease-in-out; /* Transiciones para el icono */
        }

        #icono a {
            color: white;
            font-weight: bold;
            font-size: 20px;
        }

        /* Responsividad */
        @media (max-width: 800px) {
            #mostrar-menu,
            #esconder-menu {
                display: block; 
            }

            #menu {
                position: fixed;
                width: 250px; 
                height: 100vh;
                background-color: #f0f0f0;
                right: -250px; /* Ocultar el menú inicialmente */
                top: 0;
                padding: 100px 0;
                transition: right 0.5s ease-in-out; /* Transición suave para mostrar/ocultar */
            }

            #menu .enlaces {
                display: block; /* Hacer que los enlaces sean bloques */
                padding: 10px;
                color: #000000;
                width: 100%; /* Tomar el ancho completo */
                opacity: 0; /* Inicialmente oculto */
                transition: opacity 0.5s ease-in-out; /* Transición para enlaces */
            }

            #esconder-menu {
                position: absolute;
                top: 40px;
                right: 40px;
            }

            /* Mostrar menú al seleccionar */
            #check:checked ~ #menu {
                right: 0; /* Mostrar el menú */
            }

            /* Mostrar enlaces cuando el menú está visible */
            #check:checked ~ #menu .enlaces {
                opacity: 1; /* Mostrar enlaces */
            }

            /* Ocultar icono cuando se muestre el menú */
            #check:checked ~ #icono {
                opacity: 0;
                transform: scale(0.5); /* Hacer el icono más pequeño */
                pointer-events: none; /* Para evitar interacciones */
            }
        }
    </style>
</head>
<body>
<header>
    <div id="contenedor-logo">
        <div id="logo">
            <h1>Huk Kallpalla</h1>
            <h2>De vuelta a la tierra</h2>
        </div>
    </div>
    <div id="contenedor-menu">
        <input type="checkbox" id="check">
        <label for="check" id="mostrar-menu">&#8801;</label>
        <nav id="menu">
            <div id="enlaces">
                <a href="2.3 Huk Kallpalla.php" class="enlaces">Inicio</a>
                <a href="2.4 Nosotros.php" class="enlaces">Acerca de</a>
                <a href="2.5 Catalogo.php" class="enlaces">Servicios y Productos</a>
                <a href="2.6 Ecocanje.php" class="enlaces">Ecocanje</a>
            </div>
            <label for="check" id="esconder-menu">&#215;</label>
        </nav>
        <div id="icono">
        <a href="2.2 perfil.php"><?php echo $initial;?></a> <!-- Muestra la inicial del usuario -->
        </div>
    </div>
</header>
</body>
</html>
