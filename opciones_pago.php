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
<h2 class="text-white mt-5 ml-5">Por favor elija uno de los siguientes metodos de pago para continuar</h2>
<div class="container mt-5 p-5">
<div class="card text-center">
  <div class="card-header">
    <h4>Metodos de pago</h4>
  </div>
  <div class="card-body"> 
   <ul class="nav card-header d-flex flex-lg-row justify-content-around">
        <li class="nav-item">
            <a class="nav-link" href="pagos.php">Efectivo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pagos.php">Tarjeta de Credito/Debito</a>
        </li>
       <li class="nav-item">
            <a class="nav-link" href="pagos.php">Transferencia Bancaria</a>
        </li> 
    </ul>
  </div>
</div>
</div>



    <!-- Funciones JS -->
    <script src="./src/index.js"></script>
    <!-- Script API MERCADOPAGO -->
    <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
    <!-- Script Funciones API MERCADOPAGO -->
    <script src="./src/apiMercadoPago.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
