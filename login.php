<?php require('server.php'); ?>
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
    <div class="container my-auto formulario">
            <h1 class="text-white titulo-inicio text-center mt-5">Inicio</h1>
            <form method="POST" action="./panel/index.php" class="mt-5 d-flex flex-lg-row formulario-columna">
                <div class="col-lg">
                    <input type="text" name="username" class="form-control m-2 w-25 input-user" placeholder="Usuario" required value="<?php echo $username; ?>">
                    <input type="password" name="password" class="form-control m-2 w-25 input-password" placeholder="Clave" required minlength="8">
                   <input type="submit" name="login_user" value="Iniciar" class="btn btn-success m-2 p-2">
                </div>
            </form>
        </div>



    <!-- Funciones JS -->
    <script src="./src/index.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
