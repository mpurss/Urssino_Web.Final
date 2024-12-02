<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/web_urssino/css/css/bootstrap.min.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina Web</title>
  <link rel="stylesheet" href="./css/estilo3.css">
  <link rel="stylesheet" href="./css/estilomovil.css">
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
  color: #521f6e; 
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2); /* Sombra sutil para destacar */
  letter-spacing: 0.5px; /* Espaciado ligero */
  
}
.logo:hover {
  color: #ff5c5c; /* Cambia a un color más vivo al pasar el cursor */
  transform: scale(1.1); /* Aumenta ligeramente el tamaño */
  transition: all 0.3s ease-in-out;
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
    <li><a href="./inicio/index.php" onclick="toggleMenu()">Inicio</a></li>
      <li><a href="#SobreMi" onclick="toggleMenu()">Sobre Mi</a></li>
        <li><a href="./servicios/index.php" onclick="toggleMenu()">Servicios</a></li>
        <li><a href="./portfolio/index.php" onclick="toggleMenu()">Portfolio</a></li>  
        <li><a href="./contactos/index.php" onclick="toggleMenu()">Contactos</a></li>
        <li><a href="./juegos/index.php" onclick="toggleMenu()">Juegos</a></li>
    </ul>
  </nav> 
</div>

  <nav id="hamburger-nav">
    <div class="logo">Milagros</div>
    <div class="hamburger-menu">
      <div class="hamburger-icon" onclick="toggleMenu()">
        <span></span>
      </div>
      <div class="menu-links">
      <li><a href="../inicio/index.php" onclick="toggleMenu()">Inicio</a></li>
        <li><a href="#SobreMi" onclick="toggleMenu()">Sobre Mi</a></li>
        <li><a href="./servicios/index.php" onclick="toggleMenu()">Servicios</a></li>
        <li><a href="./portfolio/index.php" onclick="toggleMenu()">Portfolio</a></li>  
        <li><a href="./contactos/index.php" onclick="toggleMenu()">Contactos</a></li>
        <li><a href="./juegos/index.php" onclick="toggleMenu()">Juegos</a></li>
        
      </div>
    </div>
  </nav>

  <!-- Start Sobre Mi -->
  <section class="SobreMi" id="SobreMi">
    <table border="0" id="about" width="100%" cellpadding="0" cellspacing="0" bgcolor="#BABDE2">
      <tr>
        <td>
          <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
            <!-- Heading Start -->
            <tr>
              <td height="160" align="center" valign="right" colspan="2">
                <font face="arial" size="6" color=" #171B36">Sobre Mi</font>
                <hr width="110" color="#171B36">
              </td>
            </tr>
            <!-- Heading End -->
            <tr>
              <td width="35%">
                <img src="./imagenes/yo.cv.jpg" width="100%" class="fade-in" alt="YO" />
              </td>
              <td width="65%" valign="top">
                <h1>Hola, Soy Milagros Urssino</h1>
                <p>Estudiante de Diseño y Animacion Digital en la UB</p>
                <p>La carrera ofrece una amplia gama de conocimientos y habilidades en el campo del diseño digital y la animación. Los estudiantes exploran conceptos fundamentales de diseño gráfico y digital, adquiriendo destrezas en software especializado como Adobe Photoshop e Illustrator. Además, se sumergen en el mundo de la animación, aprendiendo técnicas tanto en 2D como en 3D, desde storyboard hasta efectos visuales.</p>
                <p>Los estudiantes tienen la oportunidad de participar en proyectos creativos prácticos y realizar pasantías profesionales para adquirir experiencia laboral en la industria. Esta combinación de teoría y práctica prepara a los estudiantes para enfrentar los desafíos del campo del diseño y la animación, brindándoles las habilidades necesarias para destacarse en este apasionante sector.</p>
                <hr>
                <br>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </section>
  <!-- End Sobre Mi -->
 
  <footer>
    <nav>
      <div class="nav-links-container">
        <ul class="nav-links">
          <li><a href="./inicio/index.php">Inicio</a></li>
          <li><a href="#SobreMi">Sobre Mi</a></li>
          <li><a href="#contacto">Servicios</a></li>
          <li><a href="#Portfolio">Portfolio</a></li>
          <li><a href="./contactos/index.php">Contactos</a></li>
        </ul>
      </div>
    </nav>
  </footer>
  <!-- End Footer -->
  <script src="./js/script.js"></script> 
</body>
</html>