<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="2.5 Catalogo.css" rel="stylesheet" type="text/css" />
    <title>Catalogo</title>
</head>
<style>
     * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        text-decoration: none;
    }
    .H1 {
        text-align: center;
        margin: 2%;
        padding: 1%;
        font-size: 2.5rem;
        color: #37704f; 
        border-top: 2px solid #68ca41;
    }
    #productos {
        display: grid;
        grid-template-columns: repeat(3, 1fr); /* 3 columnas */
        gap: 20px; /* Espacio entre productos */
        padding: 20px; /* Espacio alrededor de la sección */
    }
    .contprod {
        background-color: #c6da44;
        border-radius: 15px;
        padding: 30px; /* Mayor padding interno */
        box-shadow: 0 2px 10px rgba(0,0,0,0.1); /* Sombra para profundidad */
        transition: transform 0.3s, box-shadow 0.3s; /* Transiciones suaves */
        text-align: center; /* Centrar texto */
        height: 400px; /* Altura fija para mantener consistencia */
        width: 520px; /* Ancho completo */
    }
    .contprod:hover {
        transform: scale(1.05); 
        box-shadow: 0 4px 20px rgba(0,0,0,0.2); /* Sombra al hacer hover */
    }
    .contprod > img {
        width: 300px; /* Ocupa el ancho completo */
        height: auto; /* Mantiene proporciones */
        height: 320px; /* Altura máxima para las imágenes */
        border-radius: 10px;
        object-fit: cover; /* Mantener proporciones */
        margin-bottom: 5px; /* Espacio entre imagen y texto */
    }
    .producto-info h3 {
        font-size: 1.8rem; /* Tamaño de título */
        margin-bottom: 5px; /* Espacio bajo el título */
    }
    .producto-info p {
        font-size: 1.5rem; /* Tamaño de descripción */
    }
    @media (max-width: 768px) {
        #productos {
            grid-template-columns: repeat(2, 1fr); /* 2 columnas en pantallas pequeñas */
        }
        .contprod {
            padding: 20px; /* Ajustar padding en pantallas pequeñas */
        }
        .producto-info h3 {
            font-size: 1.5rem; /* Tamaño de título reducido */
        }
        .producto-info p {
            font-size: 1.2rem; /* Tamaño de descripción reducido */
        }
    }
</style>
<body>
    <?php require "2.1 Encabezado.php"; ?>
   
    <h1 class="H1">PRODUCTOS</h1>
    <section id="productos">
        <div class="contprod">
            <img src="compost 1.png">
            <div class="producto-info">
                <h3>BIOL</h3>
                <p>1 litro: 15</p>
                <button>¡Intercambia!</button>
            </div>
        </div>
        <div class="contprod">
            <img src="compost 2.png">
            <div class="producto-info">
                <h3>COMPOST</h3>
                <p>1 kilo: 10</p>
                <button>¡Intercambia!</button>
            </div>
        </div>
        <div class="contprod">
            <img src="compost 3.png">
            <div class="producto-info">
                <h3>HUMUS</h3>
                <p>1 kilo: 20</p>
                <button>¡Intercambia!</button>
            </div>
        </div>
        <div class="contprod">
            <img src="compost 4.png">
            <div class="producto-info">
                <h3>LOMBRICES</h3>
                <p>1 kilo: 30</p>
                <button>¡Intercambia!</button>
            </div>
        </div>
        <!-- Productos adicionales -->
        <div class="contprod">
            <img src="cuadernos.png">
            <div class="producto-info">
                <h3>CUADERNO</h3>
                <p>1 cuaderno: 10pts</p>
                <button>¡Intercambia!</button>
            </div>
        </div>
        <div class="contprod">
            <img src="guantes.png">
            <div class="producto-info">
                <h3>GUANTES</h3>
                <p>1 guante: 10pts</p>
                <button>¡Intercambia!</button>
            </div>
        </div>
        <div class="contprod">
            <img src="polera.png">
            <div class="producto-info">
                <h3>POLERA BLANCA</h3>
                <p>Incluye: contenedor y guías: 50</p>
                <button>¡Intercambia!</button>
            </div>
        </div>
        <div class="contprod">
            <img src="chaleco.png">
            <div class="producto-info">
                <h3>CHALECO</h3>
                <p>1 chaleco: 18</p>
                <button>¡Intercambia!</button>
            </div>
        </div>
        <div class="contprod">
            <img src="polera2.png">
            <div class="producto-info">
                <h3>POLERA</h3>
                <p>1 polera: 12</p>
                <button>¡Intercambia!</button>
            </div>
        </div>
        <div class="contprod">
            <img src="bolsas.png">
            <div class="producto-info">
                <h3>BOLSAS</h3>
                <p>1 bolsa: 5</p>
                <button>¡Intercambia!</button>
            </div>
        </div>
        <div class="contprod">
            <img src="gorra.png">
            <div class="producto-info">
                <h3>GORRAS</h3>
                <p>1 gorra: 12</p>
                <button>¡Intercambia!</button>
            </div>
        </div>
        <div class="contprod">
            <img src="polera3.png">
            <div class="producto-info">
                <h3>POLO</h3>
                <p>1 polo: 15</p>
                <button>¡Intercambia!</button>
            </div>
        </div>
        <div class="contprod">
            <img src="refrigerador.png">
            <div class="producto-info">
                <h3>IMANES</h3>
                <p>1 iman: 5</p>
                <button>¡Intercambia!</button>
            </div>
        </div>
    </section>
    <footer>
        <?php require "1.6 pie de pagina.php"; ?>
    </footer>
</body>
</html>

