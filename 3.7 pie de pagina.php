<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
        }
        #footer {
            display: flex;
            justify-content: space-between; /* Distribuye el espacio entre los elementos */
            align-items: center; /* Centra verticalmente */
            background-color: #f0f0f0;
            height: 15vh;
            padding: 10px 20px; /* Espaciado interno */
            border-top: 2px solid #ccc; /* Línea superior para separar del contenido */
        }
        #footer img {
            max-height: 80%; /* Ajusta la imagen al tamaño del footer */
        }
        #footer div {
            text-align: left;
            color: #333; /* Color de texto */
        }
        @media (max-width: 768px) {
            #footer {
                flex-direction: column; /* Cambia la dirección en pantallas pequeñas */
                align-items: flex-start; /* Alinea a la izquierda */
                height: auto; /* Ajusta la altura */
            }
            #footer div {
                margin-top: 10px; /* Espacio superior en pantallas pequeñas */
            }
        }
    </style>
</head>
<body>
    <footer id="footer">
        <img src="imgen/marca.png" alt="Logo">
        <div>© Huk Kallpalla 2024 by Error-404 | All Rights Reserved <br>
            Cochabamba - Bolivia</div>
    </footer>
</body>
</html>
