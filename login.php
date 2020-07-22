<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Generate</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/login.min.css" />
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
    <div class="flecha-izquierda">
        <a href="index.php" class="text-white text-decoration-none"><i class="fas fa-arrow-left inicio-anchor"></i> Inicio</a>
    </div>
    <div class="flecha-derecha">
        <a href="register.php" class="text-white text-decoration-none">Aún no te registraste? <i class="fas fa-arrow-right cuenta-anchor"></i></a>
    </div>
    <div class="container d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-white titulo-inicio">Iniciar</h1>
        <form method="post" action="login.php" class="column login-form d-flex flex-column justify-content-center">
            <?php include('errors.php'); ?>
            <div class="row">
                <i class="fas fa-user mr-2 icono-user"></i> <input class="form-control m-2 input-user" type="text" name="username" placeholder="Usuario">
            </div>
            <div class="row">
                <i class="fas fa-lock mr-2 icono-password"></i> <input class="form-control m-2 input-password" type="password" name="password" placeholder="Clave">
            </div>
            <div class="mt-4 container-fluid back-barra-login barra login-screen">
                <div class="btns-flex d-flex flex-row justify-content-center">
                    <div class="input-group d-flex flex-row">
                        <div class="g-recaptcha mr-3" data-sitekey="API_KEY"></div>
                        <button type="submit" class="btn text-white btn-light mt-3 mb-3 boton-submit" name="login_user">Ingresar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>



    <!-- Funciones JS -->
    <script src="./src/index.js"></script>
    <!-- CAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- BOOTSTRAP JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>