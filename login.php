<?php 
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

// Cargar variables de entorno globales

$dotenv = Dotenv\Dotenv::createImmutable('./');
$dotenv->load();

$dbUser = $_ENV['DB_USER'];
$dbPassword = $_ENV['DB_PASS'];
$dbHost = $_ENV['DB_HOST'];
$dbName = $_ENV['DB_NAME'];

$con = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

$username = "";
$errors = array();

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($con, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: panel/index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

?>
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
    <div class="formulario d-flex flex-column align-items-center justify-content-around mt-5">
        <h1 class="text-white titulo-inicio">Inicio</h1>
        <form method="POST">
            <input type="text" name="username" class="form-control m-2" placeholder="Usuario" required>
            <input type="password" name="password" class="form-control m-2" placeholder="Clave" required minlength="8">
            <input type="submit" name="login_user" value="Iniciar" class="btn btn-primary p-2 m-2" style="background-color: transparent;
  padding: 2px 7px;
  border-radius: 15px; border: solid 2px;">
    </div>


    <!-- Funciones JS -->
    <script src="./src/index.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
