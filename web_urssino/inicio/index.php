
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
    .fade-in {
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }
    .fade-in.show {
      opacity: 1;
    }
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
/* Sección principal con flexbox */
.profile-section {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 20px;
}

/* Imagen de perfil */
.profile-image {
    max-width: 300px;
    width: 100%;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

/* Texto de perfil */
.profile-text {
    flex: 1;
    text-align: left;
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
}

/* Diseño responsivo */
@media (max-width: 768px) {
    .profile-section {
        flex-direction: column;
        text-align: center;
    }

    .profile-image {
        margin-bottom: 20px;
    }
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
        <li><a href="../index.php">Inicio</a></li>
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
        <li><a href="../index.php" onclick="toggleMenu()">Inicio</a></li>
        <li><a href="../index.php" onclick="toggleMenu()">Sobre Mi</a></li>
        <li><a href="../index.php" onclick="toggleMenu()">Servicios</a></li>
        <li><a href="../portfolio/index.php" onclick="toggleMenu()">Portfolio</a></li>
        <li><a href="../contactos/index.php" onclick="toggleMenu()">Contactos</a></li>
        <li><a href="../juegos/index.php" onclick="toggleMenu()">Juegos</a></li>
      </div>
    </div>
  </nav>

  <div class="content">
    <section class="profile-section">
      <img src="../imagenes/bienvenido.gif" class="profile-image fade-in" alt="YO">
      <div class="profile-text">
        <h1>Hola, Soy Milagros Urssino</h1>
        <p>Estudiante de Diseño y Animación Digital en la UB</p>
        <p>La carrera ofrece una amplia gama de conocimientos y habilidades en el campo del diseño digital y la animación. Los estudiantes exploran conceptos fundamentales de diseño gráfico y digital, adquiriendo destrezas en software especializado como Adobe Photoshop e Illustrator. Además, se sumergen en el mundo de la animación, aprendiendo técnicas tanto en 2D como en 3D, desde storyboard hasta efectos visuales.</p>
        <p>Los estudiantes tienen la oportunidad de participar en proyectos creativos prácticos y realizar pasantías profesionales para adquirir experiencia laboral en la industria. Esta combinación de teoría y práctica prepara a los estudiantes para enfrentar los desafíos del campo del diseño y la animación, brindándoles las habilidades necesarias para destacarse en este apasionante sector.</p>
        <hr>
      </div>
    </section>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.fade-in').addClass('show');
    });
  </script>
  <script src="../js/script.js"></script>
</body>
</html>



  