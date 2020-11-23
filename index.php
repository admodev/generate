<?php
include('server.php');

if (isset($_SESSION['username'])) : ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    Bienvenido/a <strong>
      <? echo $_SESSION['username']; ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

<?php endif ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Generate</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/normalize.css" />
  <link rel="stylesheet" href="./css/estilos.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link rel="apple-touch-icon" sizes="180x180" href="./img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
  <link rel="manifest" href="./img/site.webmanifest">
  <link rel="mask-icon" href="./img/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
</head>

<body>
  <div class="container-fluid background-home">
    <!-- BACK-HOME -->
    <a href="" class="navbar-brand active">
      <!-- NAVBAR -->
      <img src="./img/png-logo.png" class="d-inline-block align-top ml-5 logo" alt="logo">
    </a>
    <nav class="navbar navbar-light bg-none mt-5 navbar-expand-lg">
      <button class="navbar-toggler mx-auto my-auto bg-light" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="nav d-flex ul-menu container-fluid menu-navegacion">
          <li class="nav-item">
            <a class="nav-link text-white" href="testimonios.php">Testimonios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="visionMision.php">Visión y Misión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="listaBeneficios.php" id="irBeneficios" data-toggle="modal" data-target="#beneficiosModal">Beneficios</a>
            <div class="modal fade" id="beneficiosModal" tabindex="-1" role="dialog" aria-labelledby="beneficiosModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="beneficiosModalLabel">Beneficios</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <a href="beneficios-descuentos.php" class="modal-beneficios m-1">Descuentos</a>
                    <a href="beneficios-prestamos.php" class="modal-beneficios m-1">Prestamos</a>
                    <a href="beneficios-proyectos.php" class="modal-beneficios m-1">Proyectos</a>
                    <a href="beneficios-ayudasocial.php" class="modal-beneficios m-1">Ayuda Social</a>
                    <a href="beneficios-red.php" class="modal-beneficios m-1">Mi Red</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="comision.php">Comisión Directiva</a>
          </li>
        </ul>
        <a href="register.php" class="nav-link nav-link-registerphp"><i class="fas fa-user-plus">
          </i></a>
      </div>
    </nav> <!-- /NAVBAR -->
    <div class="container d-flex flex-lg-row reproductor-texto">
      <video src="./video/video-demo.mp4" controls class="video-intro mt-5 ml-2" autoplay loop></video>
      <div class="container container-club-sueños">
        <h1 class="h1-club-sueños">"El Club De Tus Sueños"</h1>
        <p class="p-club-sueños">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti fuga tempore accusamus cum ex ipsum atque et sit sint culpa, aperiam eligendi beatae perspiciatis perferendis deleniti recusandae sunt ipsa amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ex sapiente dolores? Corrupti excepturi animi facilis. Velit rem odio cum quo similique cumque tempore mollitia porro facere alias. In, at.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti fuga tempore accusamus cum ex ipsum atque et sit sint culpa, aperiam eligendi beatae perspiciatis perferendis deleniti recusandae sunt ipsa amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ex sapiente dolores? Corrupti excepturi animi facilis. Velit rem odio cum quo similique cumque tempore mollitia porro facere alias. In, at.
          <br><br>
          <a href="#" class="info text-decoration-none text-white row float-right mb-3 mr-2">+ INFO</a>
        </p>
      </div>
    </div>
  </div> <!-- /BACK-HOME -->
  <div class="container-fluid back-beneficios">
    <!-- BACK-BENEFICIOS -->
    <div class="container">
      <h2 class="mt-5 text-uppercase text-white"><br> Beneficios</h2>
      <div class="d-flex flex-lg-row align-items-center mt-5 beneficios-columna">
        <div class="col border m-2 back-beneficios-uno">
          <img src="./img/uno-beneficios.png" alt="uno" class="img-benef-uno">
          <h4 class="mt-5 text-center text-white text-uppercase">Descuentos</h4>
          <p class="mt-4 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam quae optio ratione dolore minus a, non maiores iure accusamus corrupti nisi aut odio cum, sed veritatis nam quaerat ut alias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quasi doloremque officia dicta atque accusantium nihil porro qui labore dolorum modi officiis delectus corporis in, ad iste soluta eos vitae!
            <br> <br>
            <a href="#" class="mb-4 mt-4 mr-3 text-decoration-none text-white float-right">+ INFO</a>
          </p>
        </div>
        <div class="col border m-2 back-beneficios-dos">
          <img src="./img/dos-beneficios.png" alt="uno" class="img-benef-dos">
          <h4 class="mt-5 text-center text-white text-uppercase">Prestamos</h4>
          <p class="mt-4 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam quae optio ratione dolore minus a, non maiores iure accusamus corrupti nisi aut odio cum, sed veritatis nam quaerat ut alias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quasi doloremque officia dicta atque accusantium nihil porro qui labore dolorum modi officiis delectus corporis in, ad iste soluta eos vitae!
            <a href="#" class="mb-4 mt-5 mr-3 text-decoration-none text-white float-right">+ INFO</a>
          </p>
        </div>
        <div class="col border m-2 back-beneficios-tres">
          <img src="./img/tres-beneficios.png" alt="uno" class="img-benef-tres">
          <h4 class="mt-5 text-center text-white text-uppercase">Proyectos</h4>
          <p class="mt-4 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam quae optio ratione dolore minus a, non maiores iure accusamus corrupti nisi aut odio cum, sed veritatis nam quaerat ut alias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quasi doloremque officia dicta atque accusantium nihil porro qui labore dolorum modi officiis delectus corporis in, ad iste soluta eos vitae!
            <a href="#" class="mb-4 mt-5 mr-3 text-decoration-none text-white float-right">+ INFO</a>
          </p>
        </div>
        <div class="col border m-2 back-beneficios-cuatro">
          <img src="./img/cuatro-beneficios.png" alt="uno" class="img-benef-cuatro">
          <h4 class="mt-5 text-center text-white text-uppercase">Ayuda Social</h4>
          <p class="mt-4 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam quae optio ratione dolore minus a, non maiores iure accusamus corrupti nisi aut odio cum, sed veritatis nam quaerat ut alias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quasi doloremque officia dicta atque accusantium nihil porro qui labore dolorum modi officiis delectus corporis in, ad iste soluta eos vitae!
            <a href="#" class="mb-4 mt-5 mr-3 text-decoration-none text-white float-right">+ INFO</a>
          </p>
        </div>
        <div class="col border m-2 back-beneficios-cinco">
          <img src="./img/cinco-beneficios.png" alt="uno" class="img-benef-cinco">
          <h4 class="mt-5 text-center text-white text-uppercase">Mi Red</h4>
          <p class="mt-4 text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam quae optio ratione dolore minus a, non maiores iure accusamus corrupti nisi aut odio cum, sed veritatis nam quaerat ut alias. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quasi doloremque officia dicta atque accusantium nihil porro qui labore dolorum modi officiis delectus corporis in, ad iste soluta eos vitae!
            <a href="#" class="mb-4 mt-5 mr-3 text-decoration-none text-white float-right">+ INFO</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container"><a href="#" class="text-white text-uppercase text-decoration-none float-right ml-5 mt-5">
      <i class="fas fa-arrow-up m-2"></i>
      Inicio
    </a></div>
  <div class="background-vision mt-3">
    <br> <br> <br> <br>
    <h2 class="mt-5 h2-vision text-white text-uppercase">Visión</h2>
    <br> <br>
    <p class="ml-5 text-white p-vision text-justify text-break w-75">En GENERATE creemos en la realización de los sueños y en que todos merecemos la mejor calidad de vida posible, es así que tomamos la iniciativa de ayudar a un país, una región y luego al mundo, desarrollando la producción y el crecimiento, cuidando el medio ambiente, para la prosperidad de todos, donde todas las personas puedan ser parte de un club que potencia tu productividad, desarrolla emprendimientos, cambia la realidad de nuestros socios, y te contiene hacia el futuro, donde cada uno de los socios de genérate pueda vivir cumpliendo sus metas financieras y desarrollar una vida en abundancia. Vemos una comunidad capaz de ayudar, ocupándonos del bien estar común, desarrollando y expresando nuestras habilidades y deseos, personales e individuales, GENERATE es un juego individual jugado en equipo, creemos que cambiar el mundo es posible.</p>
    <br> <br>
  </div>

  <div class="background-mision">
    <br> <br> <br> <br>
    <h2 class="mt-5 text-white h2-mision text-uppercase">Misión</h2>
    <br> <br>
    <p class="text-white p-mision text-justify text-break w-75">Desarrollamos una plataforma para personas que deseen ganar dinero en el mundo, hacemos que el dinero fluya como medio para conseguir riqueza, ponemos en marcha todas las ideas productivas, rescatamos tu empresa, ayudamos a que salgas de tú deuda, te ayudamos a crecer, fomentamos la educación financiera, damos soporte a cada inquietud administrativa económica, creamos una red de consumidores, nos generamos la posibilidad de invertir asegurándonos un futuro financiero en paz, nos ayudamos entre los socios ante eventualidades en la salud, GENERATE está disponible para que crear nuestro futuro, y así conseguir la vida que soñamos.</p>
    <br> <br>
  </div>
  <div class="container">
    <a href="#" id="gotop" onclick="topFunction()" class="text-dark text-uppercase text-decoration-none float-right mr-4 mt-3"><i class="fas fa-arrow-up m-2"></i>Inicio</a>
    <h2 class="mt-5 text-uppercase h2-testimonios">Testimonios</h2>
    <div class="card-deck">
      <div class="card mt-4 mb-4">
        <img src="./img/foto-testimonios-uno.png" class="card-img-top mt-3 ml-3 img-testimonios-uno" alt="foto-uno">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted"><b>Claudia</b> (35 años)</small></p>
        </div>
      </div>
      <div class="card mt-4 mb-4">
        <img src="./img/foto-testimonio-dos.png" class="card-img-top mt-3 ml-3 img-testimonios-dos" alt="foto-uno">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted"><b>Gregorio</b> (73 años)</small></p>
        </div>
      </div>
      <div class="card mt-4 mb-4">
        <img src="./img/foto-testimonio-tres.png" class="card-img-top mt-3 ml-3 img-testimonios-tres" alt="foto-uno">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <p class="card-text"><small class="text-muted"><b>Cintia</b> (28 años)</small></p>
        </div>
      </div>
      <div class="card-deck">
        <div class="card mt-4 mb-4">
          <img src="./img/foto-testimonios-uno.png" class="card-img-top mt-3 ml-3 img-testimonios-uno" alt="foto-uno">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted"><b>Claudia</b> (35 años)</small></p>
          </div>
        </div>
        <div class="card mt-4 mb-4">
          <img src="./img/foto-testimonio-dos.png" class="card-img-top mt-3 ml-3 img-testimonios-dos" alt="foto-uno">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted"><b>Gregorio</b> (73 años)</small></p>
          </div>
        </div>
        <div class="card mt-4 mb-4">
          <img src="./img/foto-testimonio-tres.png" class="card-img-top mt-3 ml-3 img-testimonios-tres" alt="foto-uno">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted"><b>Cintia</b> (28 años)</small></p>
          </div>
        </div>
        <div class="card-deck">
          <div class="card mt-4 mb-4">
            <img src="./img/foto-testimonios-uno.png" class="card-img-top mt-3 ml-3 img-testimonios-uno" alt="foto-uno">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted"><b>Claudia</b> (35 años)</small></p>
            </div>
          </div>
          <div class="card mt-4 mb-4">
            <img src="./img/foto-testimonio-dos.png" class="card-img-top mt-3 ml-3 img-testimonios-dos" alt="foto-uno">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted"><b>Gregorio</b> (73 años)</small></p>
            </div>
          </div>
          <div class="card mt-4 mb-4">
            <img src="./img/foto-testimonio-tres.png" class="card-img-top mt-3 ml-3 img-testimonios-tres" alt="foto-uno">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted"><b>Cintia</b> (28 años)</small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid background-comision comision">
    <div class="container">
      <a href="#"><i class="fas fa-arrow-up flecha-arriba"></i>
        <p class="flecha-arriba-inicio">Inicio</p>
      </a>
      <h3 class="mt-5 ml-4 text-white text-uppercase titulo-comision"><br> Comisión Directiva</h3>
      <div class="comision-top-row d-flex align-items-start mt-5 m-3 columna-comision">
        <div class="comision-1 rounded mx-auto d-block">
          <img src="./img/foto-comision.png" alt="foto-comision" class="img-thumbnail">
          <p class="mt-4 text-white">Pablo M. Morel <br> <small>Presidente</small></p>
        </div>
        <div class="comision-1 rounded mx-auto d-block">
          <img src="./img/foto-comision.png" alt="foto-comision" class="img-thumbnail">
          <p class="mt-4 text-white">Agustín Vivarelli <br> <small>Vicepresidente</small></p>
        </div>
        <div class="comision-1 rounded mx-auto d-block">
          <img src="./img/foto-comision.png" alt="foto-comision" class="img-thumbnail">
          <p class="mt-4 text-white">Karina Arten <br> <small>Secretaria</small></p>
        </div>
        <div class="comision-1 rounded mx-auto d-block">
          <img src="./img/foto-comision.png" alt="foto-comision" class="img-thumbnail">
          <p class="mt-4 text-white">Constanza Jane <br> <small>Vocal titular</small></p>
        </div>
        <div class="comision-1 rounded mx-auto d-block">
          <img src="./img/foto-comision.png" alt="foto-comision" class="img-thumbnail">
          <p class="mt-4 text-white">Juan Pablo Montalvo <br> <small>Tesorero</small></p>
        </div>
      </div>
      <div class="comision-bottom-row d-flex align-items-start m-3 columna-comision">
        <div class="comision-2 rounded mx-auto d-block">
          <img src="./img/foto-comision.png" alt="foto-comision" class="img-thumbnail">
          <p class="mt-4 text-white">Geraldine Iserski <br> <small>Vocal</small></p>
        </div>
        <div class="comision-2 rounded mx-auto d-block">
          <img src="./img/foto-comision.png" alt="foto-comision" class="img-thumbnail">
          <p class="mt-4 text-white">Pablo M. Morel <br> <small>Presidente</small></p>
        </div>
        <div class="comision-2 rounded mx-auto d-block">
          <img src="./img/foto-comision.png" alt="foto-comision" class="img-thumbnail">
          <p class="mt-4 text-white">Pablo M. Morel <br> <small>Presidente</small></p>
        </div>
        <div class="comision-2 rounded mx-auto d-block">
          <img src="./img/foto-comision.png" alt="foto-comision" class="img-thumbnail">
          <p class="mt-4 text-white">Pablo M. Morel <br> <small>Presidente</small></p>
        </div>
        <div class="comision-2 rounded mx-auto d-block">
          <img src="./img/foto-comision.png" alt="foto-comision" class="img-thumbnail">
          <p class="mt-4 text-white">Pablo M. Morel <br> <small>Presidente</small></p>
        </div>
      </div>
    </div>
    <br><br>
  </div>



  <!-- Funciones JS -->
  <script src="./src/index.js"></script>
  <!-- BOOTSTRAP JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>
