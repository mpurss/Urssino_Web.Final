<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coins Collector</title>
  <link rel="stylesheet" href="../css/estilo3.css">
  <link rel="stylesheet" href="../css/estilomovil.css">
  <link href="https://fonts.googleapis.com/css2?family=WindSong:wght@400;500&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
 
</head>
<body>
  <script src="/web_urssino/js/js/bootstrap.min.js"></script>

  <!-- Flecha para volver al inicio -->
  <style>
  .back-to-top {
      display: none;
      position: fixed;
      top: 20px; /* Cambia 'bottom' por 'top' */
      left: 20px;
      z-index: 99;
      font-size: 24px;
      color: #c5d4dd;
      background-color: #6a2b8f;
      padding: 10px 15px;
      border-radius: 50%;
      text-decoration: none;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
      transition: opacity 0.3s ease-in-out;
  }

  .back-to-top:hover,
  .back-to-top:focus {
      opacity: 0.7;
  }

  body:hover .back-to-top,
  body:focus .back-to-top {
      display: block;
  }

  .logo {
    font-family: 'WindSong', cursive;
    font-size: 48px;
    font-weight: 500;
    color:#521f6e;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    letter-spacing: 0.5px;
  }

  .logo:hover {
    color: #ff5c5c;
    transform: scale(1.1);
    transition: all 0.3s ease-in-out;
  }

  .game-section {
    text-align: center;
    margin: 0 auto;
    padding: 20px;
    max-width: 600px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .game-title {
    font-size: 24px;
    font-family: 'WindSong', cursive;
    color: #6a2b8f;
    margin-bottom: 10px;
  }

  .game-description {
    font-size: 16px;
    color: #333;
    margin-bottom: 20px;
  }

  .game-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
  }

  .game-qr {
    max-width: 150px;
    border: 2px solid #6a2b8f;
    border-radius: 8px;
  }

  .play-link {
    display: inline-block;
    padding: 10px 15px;
    background-color: #6a2b8f;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    transition: all 0.3s ease;
  }

  .play-link:hover {
    background-color: #ff5c5c;
  }

  .title {
    font-size: 24px; 
  }
  </style>

</style>

<a href="./index.php" class="back-to-top">&#8593;</a>

<nav id="desktop-nav">
  <div class="logo">Milagros</div>
</nav>

<!-- Menú RSS -->
<div class="rss-menu">
  <nav id="desktop-nav">
    <ul class="nav-links">
      <li><a href="../inicio/index.php">Inicio</a></li>
      <li><a href="../index.php">Sobre Mi</a></li>
      <li><a href="../servicios/index.php">Servicios</a></li>
      <li><a href="../portfolio/index.php">Portfolio</a></li>
  <li><a href="../contactos/index.php">Contactos</a></li>
  <li><a href="../juegos/index.php">Juegos</a></li>



    </ul>
  </nav> 
</div>

<nav id="hamburger-nav">
  <div class="logo">Milagros</div>
  <div class="hamburger-menu">
    <div class="hamburger-icon" onclick="toggleMenu()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="menu-links">
      <li><a href="../inicio/index.php" onclick="toggleMenu()">Inicio</a></li>
      <li><a href="../index.php" onclick="toggleMenu()">Sobre Mi</a></li>
      <li><a href="../servicios/index.php" onclick="toggleMenu()">Servicios</a></li>
      <li><a href="../portfolio/index.php" onclick="toggleMenu()">Portfolio</a></li>
  <li><a href="../contactos/index.php" onclick="toggleMenu()">Contactos</a></li>
  <li><a href="../juegos/index.php" onclick="toggleMenu()">Juegos</a></li>
    </div>
  </div>
</nav>

<style>
  #menu-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Ajusta esto si solo quieres centrar horizontalmente */
  }

  #menu-container button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
  }
</style>

<!-- Game Container -->
<div id="menu-container" class="container">
  <button onclick="startGame()">Iniciar Juego</button>
</div>

<div id="game-container" style="display: none;"></div>
  <!-- Inline CSS for Back-to-Top -->
  <style>
    .back-to-top {
      display: none;
      position: fixed;
      top: 20px;
      left: 20px;
      z-index: 99;
      font-size: 24px;
      color: #c5d4dd;
      background-color: #6a2b8f;
      padding: 10px 15px;
      border-radius: 50%;
      text-decoration: none;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
      transition: opacity 0.3s ease-in-out;
    }

    .back-to-top:hover,
    .back-to-top:focus {
      opacity: 0.7;
    }

    body:hover .back-to-top,
    body:focus .back-to-top {
      display: block;
    }

    .logo {
      font-family: 'WindSong', cursive;
      font-size: 48px;
      font-weight: 500;
      color: #521f6e;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
      letter-spacing: 0.5px;
    }

    .logo:hover {
      color: #ff5c5c;
      transform: scale(1.1);
      transition: all 0.3s ease-in-out;
    }
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
  <script>
    function startGame() {
      document.getElementById('menu-container').style.display = 'none';
      document.getElementById('game-container').style.display = 'block';
      new p5(gameSketch, 'game-container');
    }

    function gameSketch(p) {
      // Variables del juego
      let playerX, playerY; // Posición del jugador
      let playerSize = 40; // Tamaño del jugador
      let objectX, objectY; // Posición del objeto
      let objectSize = 30; // Tamaño del objeto
      let gameOver = false; // Estado del juego
      let bgColor; // Color de fondo
      let score = 0; // Puntaje
      let objectSpeed = 3; // Velocidad del objeto

      p.setup = function() {
        let canvas = p.createCanvas(400, 600);
        canvas.style('display', 'block');
        canvas.style('margin', 'auto');
        canvas.parent('game-container');
        playerX = p.width / 2 - playerSize / 2;
        playerY = p.height - 100;
        resetObject();
        bgColor = p.color(173, 216, 230); // Azul claro
      };

      p.draw = function() {
        p.background(bgColor);

        if (!gameOver) {
          // Dibujar jugador
          p.fill(0, 255, 0);
          p.rect(playerX, playerY, playerSize, playerSize);

          // Dibujar objeto
          p.fill(255, 255, 0);
          p.ellipse(objectX, objectY, objectSize, objectSize);

          // Movimiento del objeto
          objectY += objectSpeed;

          // Cuando el objeto sale de la pantalla sin ser recolectado
          if (objectY > p.height) {
            gameOver = true;
            bgColor = p.color(255, 0, 0); // Fondo rojo
          }

          // Detectar colisión con el jugador
          let distance = p.dist(playerX + playerSize / 2, playerY + playerSize / 2, objectX, objectY);
          if (distance < playerSize / 2 + objectSize / 2) {
            score += 10;
            resetObject();

            // Aumentar velocidad cada 100 puntos
            if (score % 100 === 0) {
              objectSpeed += 1;
            }
          }

          // Controlar el jugador
          if (p.keyIsDown(p.LEFT_ARROW) && playerX > 0) {
            playerX -= 5;
          }
          if (p.keyIsDown(p.RIGHT_ARROW) && playerX < p.width - playerSize) {
            playerX += 5;
          }
          if (p.keyIsDown(p.UP_ARROW) && playerY > 0) {
            playerY -= 5;
          }
          if (p.keyIsDown(p.DOWN_ARROW) && playerY < p.height - playerSize) {
            playerY += 5;
          }

          // Mostrar puntaje
          p.fill(0);
          p.textSize(20);
          p.textAlign(p.CENTER);
          p.text("Score: " + score, p.width / 2, 30);
        } else {
          // Pantalla de Game Over
          p.fill(0);
          p.textAlign(p.CENTER, p.CENTER);
          p.textSize(50);
          p.text("GAME OVER", p.width / 2, p.height / 2);

          // Mostrar puntaje final
          p.textSize(20);
          p.text("Final Score: " + score, p.width / 2, p.height / 2 + 50);
        }
      };

      function resetObject() {
        objectX = p.int(p.random(objectSize, p.width - objectSize));
        objectY = -objectSize; // Reinicia desde arriba
      }

      p.keyPressed = function() {
        if (gameOver && p.key === ' ') {
          resetGame();
        }
      };

      function resetGame() {
        playerX = p.width / 2 - playerSize / 2;
        playerY = p.height - 100;
        score = 0;
        objectSpeed = 3;
        bgColor = p.color(173, 216, 230);
        resetObject();
        gameOver = false;
      }
    }
  </script>
   <script src="../js/script.js"></script>
</body>
</html>
