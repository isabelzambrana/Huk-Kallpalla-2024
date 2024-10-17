<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canje</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #ffffff;
            margin: 20px;
            height: 100%;
        }
        #titulo {
            font-size: 30px;
            margin: 5px;
            text-align: center;
        }
        table {
            width: 100%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #74b72e;
            color: white;
        }
        tr:hover {
            background-color: #ddd;
        }
        #boton-agregar {
            background-color: #68ca41;
            text-align: center;
            color: white;
            border: none;
            font-size: 2vh;
            border-radius: 10px;
            margin: 20px;
            padding: 10px;
            cursor: pointer;
            transition: all 0.3s;
            outline: none;
        }
        #boton-agregar:hover {
            background-color: #003634; 
            transform: translateY(-3px);
        }
        #boton-agregar:active {
            transform: translateY(2px);
        } 
    </style>
</head>
<body>
<?php
    require "3.1 Encabezado.php";
?>
<h6 id="titulo">Canjes</h6>
<table>
    <tr>
        <th>Usuario</th>
        <th>Producto</th>
        <th>Opciones</th>
    </tr>
    <tr>
        <td>juanito4534</td>
        <td>Humus</td>
        <td>Aceptar | Denegar</td>
    </tr>
    <tr>
        <td>paola32755</td>
        <td>Humus</td>
        <td>Aceptar | Denegar</td>
    </tr>
    <tr>
        <td>gregoriga32</td>
        <td>Lombrices</td>
        <td>Aceptar | Denegar</td>
    </tr>
    <tr>
        <td>maria09212</td>
        <td>Biol</td>
        <td>Aceptar | Denegar</td>
    </tr>
    <tr>
        <td>aleatorio99</td>
        <td>Humus</td>
        <td>Aceptar | Denegar</td>
    </tr>
</table>
<button id="boton-agregar">Agregar Canje</button>
<?php
    require "3.7 pie de pagina.php";
?>
</body>
</html>
