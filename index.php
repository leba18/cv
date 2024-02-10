<?php
$vers = date("ymdHis");
?>
<!DOCTYPE html>

<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CV Abel Cadena Macías</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="style.css?<?php echo $vers; ?>" />
  <link rel="stylesheet" href="stylepc.css?<?php echo $vers; ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
</head>

<body>
  <nav id="navbar">
    <div id="menu">
      <button id="hamburger">
        <div></div>
        <div></div>
        <div></div>
      </button>
    </div>
    <div id="desplegar" class="ocultar">
      <p><a class="option" href="#sobreMi">sobre mi</a></p>
      <p><a class="option" href="#portafolio">portafolio</a></p>
      <p><a class="option" href="#habilidades">habilidades</a></p>
      <p><a class="option" href="#experiencia">experiencia</a></p>
      <p><a class="option" href="#contacto">contacto</a></p>
    </div>
  </nav>
  <header class="header">
    <div class="selfie">
      <picture>
        <source srcset="selfie.jpg" media="(max-width:500px)">
        <source srcset="selfiepc.jpg">
        <img alt="Abel Cadena Macías" srcset="selfie.jpg" />
      </picture>
      <h1>Abel Cadena Macías<br><span id="nose">desarrollador web</span></h1>
    </div>
    <div class="logos">
      <div class="redes">
        <a href="https://www.linkedin.com/in/abel-cadena-mac%C3%ADas-18889624b/" target="_blank">
          <img src="linkedin.png" alt="logo de linkedin">
        </a>
      </div>
      <div class="redes">
        <a href="https://github.com/leba18" target="_blank">
          <img src="github.png" alt="logo de github">
        </a>
      </div>
      <div class="redes">
        <a href="https://www.instagram.com/leba.1809/" target="_blank">
          <img src="instagram.png" alt="logo de instagram">
        </a>
      </div>
      <div class="redes">
        <a href="https://wa.link/oeimi0" target="_blank">
          <img src="whatsapp.png" alt="logo de whattsapp">
        </a>
      </div>
    </div>
  </header>
  <main>
    <section id="sobreMi" class="seccion">
      <h2>sobre mi</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem saepe eum dicta magnam debitis ex dolorem iusto earum quam eveniet, explicabo quis, quae suscipit? Labore, deserunt tempore? Quod, repellat aspernatur?</p>
    </section>
    <section id="experiencia" class="seccion">
      <h2>Experiencia</h2>
      <h3>profesional</h3>
      <div class="empresa">
        <img src="https://essencemedia.com.mx/wp-content/uploads/2023/03/SIMBOLO_POSITIVO_web_2.png" alt="logo essencia media">
        <p>essencia media</p>
      </div>
      <p>sep 23 - dic 23<br>desarrollador web</p>
      <h3>academica</h3>
      <div class="empresa">
        <img src="aliat_logo.png" alt="logo aliat universidades" class="logo-empresa">
        <p>UVG Campus Tuxtla</p>
      </div>
      <p>sep 20 - dic 23<br>ing. en sistemas computacionales<br>promedio 9.7</p>
    </section>
    <section id="portafolio" class="seccion">
      <h2>Portafolio</h2>
      <a href="#">
        <img src="https://www.forbes.com.mx/2016/11/612370.png.scale_.1000.high_.png" alt="un portafolio">
      </a>
      <h3>portafolio 1</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      <a href="#">
        <img src="https://perfectchoice.me/cdn/shop/products/PortafolioparalaptopejecutivogrisPerfectChoice.png?v=1638329611" alt="otro portafolio">
      </a>
      <h3>portafolio 2</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      <a href="#">
        <img src="https://montblancmx.vteximg.com.br/arquivos/ids/163294-600-600/MTB_MB127409_LEA_01_01_T_1961223.png?v=637438276935770000" alt="un último portafolio">
      </a>
      <h3>portafolio 3</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </section>
    <section id="habilidades" class="seccion">
      <h2>Habilidades</h2>
      <p>inglés</p>
      <div class="caja">
        <div class="progreso50"></div>
      </div>
      <p>HTML</p>
      <div class="caja">
        <div class="progreso80"></div>
      </div>
      <p>CSS</p>
      <div class="caja">
        <div class="progreso50"></div>
      </div>
      <p>JavaScript</p>
      <div class="caja">
        <div class="progreso50"></div>
      </div>
      <p>DOM</p>
      <div class="caja">
        <div class="progreso10"></div>
      </div>
      <p>React</p>
      <div class="caja">
        <div class="progreso10"></div>
      </div>
      <p>SQL</p>
      <div class="caja">
        <div class="progreso10"></div>
      </div>
      <p>Node.js</p>
      <div class="caja">
        <div class="progreso10"></div>
      </div>
      <p>Python</p>
      <div class="caja">
        <div class="progreso10"></div>
      </div>
    </section>
    <section id="contacto" class="seccion">
      <h2>Contacto</h2>
      <div class="primero">
        <img src="mail.svg" alt="mail icon">
        <p>acm18922@gmail.com</p>
      </div>
      <div class="segundo">
        <img src="smartphone.svg" alt="smartphone icon">
        <p>961-124-0895</p>
      </div>
      <form action="https://formspree.io/f/xqkrevoe" method="post">
        <label>Correo Electronico<br /><input type="email" name="correo" id="correo" required /></label>
        <br />
        <label>mensaje<br /><textarea name="mensaje" id="mensaje" cols="30" rows="10" required></textarea>
        </label>
        <br />
        <div class="boton">
          <button>Enviar</button>
        </div>
      </form>
      <div class="logos">
        <div class="redes">
          <a href="https://www.linkedin.com/in/abel-cadena-mac%C3%ADas-18889624b/" target="_blank">
            <img src="https://cdn.icon-icons.com/icons2/791/PNG/512/LINKEDIN_icon-icons.com_65488.png" alt="logo de linkedin">
          </a>
        </div>
        <div class="redes">
          <a href="https://github.com/leba18" target="_blank">
            <img src="https://icones.pro/wp-content/uploads/2021/06/symbole-github-noir.png" alt="logo de github">
          </a>
        </div>
        <div class="redes">
          <a href="https://www.instagram.com/leba.1809/" target="_blank">
            <img src="https://pluspng.com/img-png/instagram-icon-png-instagram-icon-1600.png" alt="logo de instagram">
          </a>
        </div>
        <div class="redes">
          <a href="https://wa.link/oeimi0" target="_blank">
            <img src="https://freevector.co/wp-content/uploads/2009/01/whatsapp-glyph-black.png" alt="logo de whattsapp">
          </a>
        </div>
      </div>
    </section>
  </main>
  <footer><small>&copy;2024 CV Abel Cadena Macías</small></footer>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="javascript.js?<?php echo $vers; ?>"></script>

</html>