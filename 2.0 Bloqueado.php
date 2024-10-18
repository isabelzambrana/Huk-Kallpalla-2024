<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animación de Fiesta</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #2c3e50;
            overflow: hidden;
        }
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: red;
            opacity: 0.8;
            animation: fall linear infinite;
        }

        @keyframes fall {
            0% {
                transform: translateY(-100%);
            }
            100% {
                transform: translateY(100vh);
            }
        }
    </style>
</head>
<body>

    <div id="message" style="color: white; font-size: 3rem; text-align: center;">
        ¡Estás baneado, jaja! 🎉
    </div>

    <script>
        function createConfetti() {
            const confetti = document.createElement('div');
            confetti.className = 'confetti';
            confetti.style.left = Math.random() * window.innerWidth + 'px';
            confetti.style.backgroundColor = '#' + Math.floor(Math.random()*16777215).toString(16);
            document.body.appendChild(confetti);

            setTimeout(() => {
                confetti.remove();
            }, 3000); // Elimina el confeti después de 3 segundos
        }

        setInterval(createConfetti, 200); // Crea confeti cada 200ms
    </script>
</body>
</html>
