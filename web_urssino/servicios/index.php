<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/web_urssino/css/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina Web</title>
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

/* Muestra la flecha cuando la página se desplaza más de 100px */
body:hover .back-to-top,
body:focus .back-to-top {
    display: block;
}
.logo {
  font-family: 'WindSong', cursive;
  font-size: 48px; /* Tamaño generoso para destacar */
  font-weight: 500; /* Peso más grueso para mayor visibilidad */
  color: #521f6e; /* Color principal de tu diseño */
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2); /* Sombra sutil para destacar */
  letter-spacing: 0.5px; /* Espaciado ligero */
  
}
.logo:hover {
  color: #ff5c5c; /* Cambia a un color más vivo al pasar el cursor */
  transform: scale(1.1); /* Aumenta ligeramente el tamaño */
  transition: all 0.3s ease-in-out;
}



.section_text_p1 {
  font-family: 'Arial', sans-serif; /* Cambia esto a la fuente que prefieras */
  font-size: 24px; /* Ajusta el tamaño del texto */
  color: #333; /* Cambia el color si es necesario */
}


</style>

  <a href="../index.php" class="back-to-top">&#8593;</a>
  
  <nav id="desktop-nav">
    <div class="logo">Milagros</div>
  </nav>

  <!-- Menú RSS -->
  <div class="rss-menu">
    <nav id="desktop-nav">
      <ul class="nav-links">
        <li><a href="../inicio/index.php">Inicio</a></li>
        <li><a href="../index.php">Sobre Mi</a></li>
        <li><a href="../index.php">Servicios</a></li>
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
        <li><a href="../index.php" onclick="toggleMenu()">Servicios</a></li>
        <li><a href="../portfolio/index.php" onclick="toggleMenu()">Portfolio</a></li>
        <li><a href="../contactos/index.php" onclick="toggleMenu()">Contactos</a></li>
        <li><a href="../juegos/index.php" onclick="toggleMenu()">Juegos</a></li>
      </div>
    </div>
  </nav>
  <!-- Start Pie De Pagina -->
  <section id="contacto">
    <h3 class="section_text_p1"></h3>  
    <h1 class="title">Contactame</h1>
    <div class="contact-info-upper-container">
      <div class="contact-info-container">
        <img src="../imagenes/correo.png" alt="Email icon" class="icon contact-icon email-icon">
        <p><a href="mailto:mpurssino@gmail.com">mpurssino@gmail.com</a></p>
      </div>
      <div class="contact-info-container">
        <img src="../imagenes/linkedin.png" alt="LinkedIn icon" class="icon contact-icon">
        <p><a href="https://www.linkedin.com">LinkedIn</a></p>
      </div>
    </div>
  </section>
  <footer>
    <nav>
      <div class="nav-links-container">
        <ul class="nav-links">
          <li><a href="../inicio/index.php">Inicio</a></li>
          <li><a href="/index.php">Sobre Mi</a></li>
          <li><a href="../servicios/index.php">Servicios</a></li>
          <li><a href="../portfolio/index.php">Portfolio</a></li>
          <li><a href="../contactos/index.php">Contactos</a></li>
          <li><a href="../juegos/index.php">Juegos</a></li>
        </ul>
      </div>
    </nav>
  </footer>
  <!-- End Footer -->
  <script src="../js/script.js"></script>
  
</body>
</html>
