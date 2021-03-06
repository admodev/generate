﻿<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ .  '../../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();
$dbUser = $_ENV['DB_USER'];
$dbPassword = $_ENV['DB_PASS'];
$dbHost = $_ENV['DB_HOST'];
$dbName = $_ENV['DB_NAME'];
$con = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

$_SESSION['username'] == null ? header('Location: ../login.php') : $_SESSION['welcome_message'] = "Bienvenido/a de nuevo!";

if (isset($_POST['logout'])) {
    unset($_SESSION['username']);
    session_destroy();
    header('location: logout.php');
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Generate | Menu Principal</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/css/estilos-index.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Mi Cuenta</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Bienvenido/a &nbsp; <?php echo $_SESSION['username']; ?>
                <form method="post">
                    <input type="hidden" name="logout" value="true" />
                    <button class="btn btn-danger square-btn-adjust">Cerrar Sesión</button>
                </form>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>


                    <li>
                        <a href="mis_inversiones.php"> <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-briefcase-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z" />
                                <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v1.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z" />
                            </svg> Mis Inversiones</a>
                    </li>
                    <li>
                        <a href="mis_creditos.php"> <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-calendar3-event-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2h16a2 2 0 0 0-2-2H2zm14 3H0v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3zm-2 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg> Mis Creditos</a>
                    </li>
                    <li>
                        <a href="mis_pagos.php"> <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-calendar-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM0 5h16v9a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5zm10.854 3.854a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                            </svg> Mis Pagos</a>
                    </li>
                    <li>
                        <a href="oportunidades_negocio.php"> <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-cash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z" />
                                <path d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                            </svg> Oportunidades De Negocio</a>
                    </li>
                    <li>
                        <a href="mi_red.php"><i class="fa fa-sitemap fa-3x"></i> Mi Red</a>
                    </li>
                    <li>
                        <a href="mi_billetera.php"> <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-wallet" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 4v8.5A1.5 1.5 0 0 0 3.5 14h10a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 1 1 0v8a1.5 1.5 0 0 1-1.5 1.5h-10A2.5 2.5 0 0 1 1 12.5V4h1z" />
                                <path fill-rule="evenodd" d="M1 4a2 2 0 0 1 2-2h11.5a.5.5 0 0 1 0 1H3a1 1 0 0 0 0 2h11.5v1H3a2 2 0 0 1-2-2z" />
                                <path fill-rule="evenodd" d="M13 5V3h1v2h-1z" />
                            </svg> Mi Billetera</a>
                    </li>
                    <li>
                        <a href="informacion_club.php"> <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-info-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg> Informacion Del Club</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <h2>Menú Principal</h2>
                    <div class="menuGrid">
                        <div class="card itemUno" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Mis Inversiones</h3>
                                <a href="mis_inversiones.php" class="btn btn-primary">Click Aquí</a>
                            </div>
                        </div>
                        <div class="card itemDos" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Mis Créditos</h3>
                                <a href="mis_creditos.php" class="btn btn-primary">Click Aquí</a>
                            </div>
                        </div>
                        <div class="card itemTres" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Mis Pagos</h3>
                                <a href="mis_pagos.php" class="btn btn-primary">Click Aquí</a>
                            </div>
                        </div>
                        <div class="card itemCuatro" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Oportunidades de Negocio</h3>
                                <a href="oportunidades_negocio.php" class="btn btn-primary">Click Aquí</a>
                            </div>
                        </div>
                        <div class="card itemCinco" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Mi Red</h3>
                                <a href="mi_red.php" class="btn btn-primary">Click Aquí</a>
                            </div>
                        </div>
                        <div class="card itemSeis" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Mi Billetera</h3>
                                <a href="mi_billetera.php" class="btn btn-primary">Click Aquí</a>
                            </div>
                        </div>
                        <div class="card itemSiete" style="width: 18rem;">
                            <div class="card-body">
                                <h3 class="card-title">Información del Club</h3>
                                <a href="informacion_club.php" class="btn btn-primary">Click Aquí</a>
                            </div>
                        </div>
                        <!-- /. MENUGRID -->
                    </div>
                    <!-- /. ROW  -->
                    <hr />

                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>


</body>

</html>