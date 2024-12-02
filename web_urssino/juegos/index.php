<!DOCTYPE html>
<html lang="es">
<head>
  <link rel="stylesheet" href="/web_urssino/css/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Juegos</title>
  <link rel="stylesheet" href="../css/estilo3.css">
  <link rel="stylesheet" href="../css/estilomovil.css">
  <link href="https://fonts.googleapis.com/css2?family=WindSong:wght@400;500&display=swap" rel="stylesheet">
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

<!-- Juegos Section -->
<section class="Juegos" id="Juegos" style="background-color: #BABDE2; padding: 20px;">
  <div class="content" style="max-width: 800px; margin: auto;">
    <h1 style="text-align: center; color: #333;">¡Explora Mis Juegos!</h1>
    <p style="text-align: center; color: #555; margin-bottom: 30px;">
      Aquí podrás encontrar los juegos desarrollados, listos para que los pruebes.
    </p>

   <!-- Caja de Nave Espacial -->
<div style="background-color: white; padding: 20px; border-radius: 10px; margin-bottom: 20px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); text-align: center;">
  <h2 style="color: #333; margin-bottom: 20px;">Coins Collector</h2>
  <img src="../imagenes/coins collector.PNG" alt="Código QR Nave Espacial" style="display: block; max-width: 100%; margin: auto; height: auto;">
  <p style="margin-top: 10px;">Haz clic en el enlace para jugar:</p>
  <div style="display: inline-block; background-color: #F8F8F8; padding: 10px 20px; border-radius: 10px; margin-top: 20px;">
    <a href="../Coins Collector/index.php" style="text-decoration: none; color: crimson;" target="_blank">
      Jugar Ahora
    </a>
  </div>
</div>

    <!-- Caja de Apple Run -->
    <div style="background-color: white; padding: 20px; border-radius: 10px; margin-bottom: 20px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); text-align: center;">
      <h2 style="color: #333; margin-bottom: 20px;">Apple Run</h2>
      <img src="../imagenes/apple run.PNG" alt="Código QR Apple Run" style="display: block; max-width: 100%; margin: auto; height: auto;">
      <p style="margin-top: 10px;">Haz clic en el enlace para jugar:</p>
      <div style="display: inline-block; background-color: #F8F8F8; padding: 10px 20px; border-radius: 10px; margin-top: 20px;">
        <a href="https://human130605.itch.io/apple" 
           style="text-decoration: none; color: crimson;" 
           target="_blank">
          Jugar Ahora
        </a>
      </div>
    </div>
  </div>
</section>
<script src="../js/script.js"></script>