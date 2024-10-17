<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificación</title>
    <!-- Incluir Font Awesome usando enlace en el head -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        #noti {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        #notification {
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    width: 300px;
    /* Haz que sea visible desde el principio */
    opacity: 1; /* Cambia opacity a 1 para que sea visible */
    transform: translateY(0); /* Elimina la traducción hacia arriba */
    transition: opacity 0.5s ease, transform 0.5s ease;
}

        #notification h2 {
            color: #A19F32; /* Color del texto */
            margin: 0 0 10px;
        }
        #notification p {
            color: #5D378C; /* Color del texto de notificación */
            margin: 0 0 20px;
        }
        #notification button {
            background-color: #616036; /* Color del botón */
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Transición para el botón */
        }
        #notification button:hover {
            background-color: #A19F32; /* Color del botón al hacer hover */
            transform: scale(1.05); /* Agrandar un poco al hacer hover */
        }

        /* Estilo para el icono de la campanita */
        #notification .fa-bell {
            font-size: 40px;
            color: #A19F32; /* Color de la campanita */
            margin-bottom: 10px;
        }
    </style>
</head>
<body id="noti" class="loaded">
    <div id="notification">
        <!-- Icono de la campanita -->
        <i class="fas fa-bell"></i>
        <h2>Notificación</h2>
        <p>Tienes 1 nueva notificación</p>
        <button>Abrir</button>
    </div>
</body>
</html>
