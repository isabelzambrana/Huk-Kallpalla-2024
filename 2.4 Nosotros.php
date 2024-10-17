<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    #titulitos {
    font-size: 2rem;
    color: #A19F32;
    margin-bottom: 20px;
    justify-content: center;
    text-align: center; /* Esto centra el texto */
}

    #historia {
        background-image: url("fondo2.png");
        background-size: cover;
        padding: 60px 20px;
        color: white;
        text-align: center;
        transition: background-color 0.5s;
    }

    #textos>h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: #ffffff;
        transition: 1s all;
    }

    #textos>h1:hover {
        text-shadow: 2px 2px 5px #6C0DE0;
    }

    #textos>p {
        font-size: 1rem;
        line-height: 1.6;
        text-align: justify;
        color: #ffffff;
    }

    #informacion {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 40px 20px;
    }

    #tarjeta-wrap {
        margin: 20px;
        perspective: 1000px;
    }

    #tarjeta {
        width: 350px;
        height: 250px;
        position: relative;
        transform-style: preserve-3d;
        transition: transform 0.5s, box-shadow 0.3s;
    }

    #adelaante,
    #atras {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        border: 2px solid #A19F32;
        backface-visibility: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        font-size: 1.2rem;
        border-radius: 10px;
    }

    #adelaante {
        color: #6C0DE0;
        font-weight: bold;
        transition: transform 0.5s, color 0.3s;
    }

    #atras {
        transform: rotateY(180deg);
        color: #5D378C;
    }

    #tarjeta-wrap:hover #tarjeta {
        transform: rotateY(180deg);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    #ambientes {
        background-color: white;
        padding: 40px 20px;
        text-align: center;
        transition: background-color 0.5s;
    }

    #ambientes #image-grid {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
    }

    #ambientes #image-item {
        width: 250px;
        height: 200px;
        transition: transform 0.3s;
    }

    #ambientes #image-item:hover {
        transform: scale(1.05);
    }

    #ambientes #image-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    #Calendario {
        color: #4CAF50;
        margin: 20px auto;
        max-width: 90%;
        display: flex;
        flex-direction: column;
    }

    #Calendario>iframe {
        width: 100%;
        height: 600px;
        border: 0;
    }

    #Cartas {
    display: flex;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
    flex-direction: row;
    padding: 20px;
    flex-wrap: wrap; /* Añadido para permitir que las cartas se ajusten en pantallas pequeñas */
}

#card {
    display: inline-block;
    margin: 20px;
    width: 200px;
    height: 300px;
    border-radius: 5px;
    border: 2px solid #dce00d;
    background-color: #ffffff;
    overflow: hidden;
    position: relative;
    transition: box-shadow 0.3s ease, transform 0.3s ease; /* Añadido para suavizar la transformación */
}

#card>h2 {
    color: #dce00d;
    font-size: 1.5em;
    text-align: center;
    margin: 10px 0;
    transition: color 0.3s ease;
    justify-content: center;
}

#lore {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background:#6C0DE0;
    opacity: 0;
    transition: opacity 0.5s ease;
    position: absolute;
    top: 0;
    left: 0;
}

#card:hover #lore {
    opacity: 1;
}

#protexto {
    color: #ffffff;
    margin-left: 5%;
}


@media (max-width: 1024px) {
    #card {
        width: 180px;
        height: 270px;
    }

    #card>h2 {
        font-size: 1.4em;
    }

    #lore a {
        font-size: 0.9em;
    }
}

@media (max-width: 768px) {
    #card {
        width: 150px;
        height: 230px;
    }

    #card>h2 {
        font-size: 1.2em;
    }

    #lore a {
        font-size: 0.8em;
    }
}

@media (max-width: 480px) {
    #card {
        width: 120px;
        height: 200px;
    }

    #card>h2 {
        font-size: 1em;
    }

    #lore a {
        font-size: 0.7em;
    }
}

    @media (max-width: 768px) {
        #textos h1 {
            font-size: 2rem;
        }

        #informacion {
            display: flex;
            flex-direction: column;
        }

        #tarjeta {
            width: 90%;
            height: 200px;
        }

        #ambientes>#container h1 {
            font-size: 1.5rem;
        }

        #ambientes #image-item {
            width: 100%;
            height: auto;
        }
    }

    @media (max-width: 700px) {
        #informacion {
            display: flex;
            flex-direction: column;
        }

        #tarjeta {
            width: 90%;
            height: 300px;
        }
    }
</style>

<body id="principal">
    <?php require "2.1 Encabezado.php"; ?>
    <section id="historia">
        <div id="textos">
            <h1>Historia</h1>
            <p>La base que HUK KALLPALLA fortalece principalmente es el compostaje, mediante la venta de composteras
                para todo tipo de consumo, incluyendo compostaje comunitario en instituciones educativas y
                establecimientos habitacionales. El manejo y gestión de residuos sólidos orgánicos se realiza
                adecuadamente mediante talleres y cursos, evitando la contaminación de suelos y aguas subterráneas, y
                promoviendo el uso de compost, un bio fertilizante que se puede comercializar.</p>
        </div>
    </section>
    <section id="informacion">
        <div id="tarjeta-wrap">
            <div id="tarjeta">
                <div id="adelaante">
                    <p>¿Quiénes<br>somos?</p>
                </div>
                <div id="atras">
                    <p>Huk Kallpalla es un movimiento que busca fomentar la educación ambiental mediante capacitaciones
                        y talleres. Ofrecemos composteras que impulsan prácticas responsables con el medio ambiente y
                        garantizamos la calidad y el compromiso institucional en el servicio de recojo de residuos
                        orgánicos.</p>
                </div>
            </div>
        </div>
        <div id="tarjeta-wrap">
            <div id="tarjeta">
                <div id="adelaante">
                    <p>Misión</p>
                </div>
                <div id="atras">
                    <p>Nuestra misión es fomentar el cuidado del medio ambiente, respetando los ciclos naturales de los
                        residuos orgánicos mediante el compostaje, impulsando una alimentación más sana y evitando el
                        uso de abonos químicos.</p>
                </div>
            </div>
        </div>
        <div id="tarjeta-wrap">
            <div id="tarjeta">
                <div id="adelaante">
                    <p>Visión</p>
                </div>
                <div id="atras">
                    <p>Anhelamos ser reconocidos como una empresa comprometida, promoviendo una sociedad consciente y
                        responsable con el medio ambiente, y siendo referentes en el compostaje de residuos orgánicos.
                    </p>
                </div>
            </div>
        </div>
        <div id="tarjeta-wrap">
            <div id="tarjeta">
                <div id="adelaante">
                    <p>Convenios</p>
                </div>
                <div id="atras">
                    <p>Agrecol<br>
                        Univalle<br>
                        GAMC<br>
                        Laguna Camping<br>
                        Fundación Agrónomos por Bolivia</p>
                </div>
            </div>
        </div>
    </section>
    <section id="ambientes">
        <h1 id="titulitos">Ambientes</h1>
        <div id="container">
            <div id="image-grid">
                <div id="image-item"><img src="am1.png" alt="Seamos Verdes"></div>
                <div id="image-item"><img src="am2.JPG" alt="Grupo con plantas"></div>
                <div id="image-item"><img src="am3.JPG" alt="Kallpalla compostaje"></div>
                <div id="image-item"><img src="am4.jpeg" alt="Hablemos de basura"></div>
            </div>
        </div>
    </section>
    <section id="Calendario">
        <h1 id="titulitos">Actividades</h1>
        <iframe
            src="https://calendar.google.com/calendar/embed?src=duranzubietagabriel%40pedropoveda.edu.bo&ctz=America%2FLa_Paz"
            style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </section>
    <h1 id="titulitos">Proyectos</h1>
    <section id="Cartas">
        <div id="card">
            <h2>Compost</h2>
            <div id="lore">
                <a id="protexto">"Intercambia tus residuos por un futuro más verde."</a> </center></br>
                <a id="protexto">El compost es mucho más que abono. Es la vida que regresa a la tierra. ¿Sabías que
                    puedes hacer tu propio compost en casa? ¡Comienza hoy mismo a cultivar un jardín más sano y
                    sostenible!</a>
            </div>
        </div>

        <div id="card">
            <h2>Ecocanje</h2>
            <div id="lore">
                <a id="protexto">"Transformamos residuos orgánicos en vida."</a> </center></br>
                <a id="protexto">¡Recicla y gana! Intercambia tus residuos biodegradables y adquiere monedas para
                    obtener productos ecológicos.</a>
            </div>
        </div>

        <div id="card">
            <h2>Huertos</h2>
            <div id="lore">
                <a id="protexto">"Siembra el cambio, cosecha salud."</a> </center></br>
                <a id="protexto">En Huk Kallpalla, creemos en el poder de la naturaleza. Por eso ofrecemos todo lo que
                    necesitas para crear tu propio huerto urbano y disfrutar de los beneficios de una alimentación sana
                    y sostenible</a>
            </div>
        </div>
    </section>
    <?php require "1.6 pie de pagina.php"; ?>
</body>

</html>