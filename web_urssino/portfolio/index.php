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
<!-- Start Portfolio -->
<section class="Portfolio" id="Portfolio">
    <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#BABDE2">
      <tr>
        <td>
          <table border="0" width="85%" cellpadding="15" cellspacing="0" align="center">
            <!-- Heading Start -->
            <tr>
              <td height="160" align="center" valign="middle" colspan="3">
                <font face="arial" size="6" color="#171B36">Portfolio</font>
                <hr width="70" color="#171B36">
              </td>
            </tr>
            <!-- Heading End -->
            <tr>
				<td width="33.33%" valign="top">
				  <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#BABDE2">
					  <tr>
						  <td>
							  <font face="arial" size="5" color="#171B36">
							  Primer Proyecto
							 </font>
							 <br/>
							 <br/>
							 <font face="arial" size="4" color="#374375">
							  Diseño de Pagina
							 </font>
							 <br/><br/>
						  <img src="../imagenes/diseno pagina.tp1.jpg" width="100%"/>
						  </td>
					  </tr>
				  </table>	
				</td>
				
				<td width="33.33%" valign="top">
				  <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#BABDE2">
					  <tr>
						  <td>
							  <font face="arial" size="5" color="#171B36">
							   Segundo Proyecto 
							 </font>
							 <br/>
							 <br/>
							 <font face="arial" size="4" color="#374375">
							  Diseñar
							 </font>
							 <br/><br/>
						  <img src="../imagenes/creacion de personaje.tp2.jpg" width="100%"/>
						  </td>
					  </tr>
				  </table>	
				</td>
   
				<td width="33.33%" valign="top">
				  <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#BABDE2">
					  <tr>
						  <td>
							  <font face="arial" size="5" color="#171B36">
							  Tercer Proyecto
							 </font>
							 <br/>
							 <br/>
							 <font face="arial" size="4" color="#374375">
							  Diseño Grafico
							 </font>
							 <br/><br/>
						  <img src="../imagenes/disenodemarca.tp3.jpg" width="100%"/>
						  </td>
					  </tr>
				  </table>	
				</td>
			</tr>
			 <tr>
				<td width="33.33%" valign="top">
				  <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#BABDE2">
					  <tr>
						  <td>
							  <font face="arial" size="5" color="#171B36">
							  Cuarto Proyecto
							 </font>
							 <br/>
							 <br/>
							 <font face="arial" size="4" color="#374375">
							  Codigo
							 </font>
							 <br/><br/>
						  <img src="../imagenes/img_tr2.jpg" width="100%"/>
						  </td>
					  </tr>
				  </table>	
				</td>
				
				<td width="33.33%" valign="top">
				  <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#BABDE2">
					  <tr>
						  <td>
							  <font face="arial" size="5" color="#171B36">
							  Quinto Proyecto
							 </font>
							 <br/>
							 <br/>
							 <font face="arial" size="4" color="#374375">
							  Animacion
							 </font>
							 <br/><br/>
						  <img src="../imagenes/animacion.tp5.jpg" width="100%"/>
						  </td>
					  </tr>
				  </table>	
				</td>
   
				<td width="33.33%" valign="top">
				  <table border="0" width="100%" cellpadding="15" cellspacing="0" align="center" bgcolor="#BABDE2">
					  <tr>
						  <td>
							  <font face="arial" size="5" color="#171B36">
							  Sexto Proyecto
							 </font>
							 <br/>
							 <br/>
							 <font face="arial" size="4" color="#374375">
							  Estilo
							 </font>
							 <br/><br/>
						  <img src="../imagenes/la niña y la estrella.tp6.jpg" width="100%"/>
						  </td>
					  </tr>
				  </table>	
				</td>
			</tr>
		   <!-- section padding bottom -->
			  <tr>
					<td height="60" colspan="3">
					
					</td>
			  </tr>
			 <!-- section padding bottom End-->
		  </table>
		</td>
	  </tr>
   </table>
   </section>
   <script src="../js/script.js"></script>
</body>
   <!-- End Portfolio -->
</html>