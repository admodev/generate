<?php

include('server.php');

$queryReferentes = "SELECT id, num_socio_ref_input FROM users WHERE id <= 50";
$resultReferentes = mysqli_query($con, $queryReferentes);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Generate</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/estilos.min.css" />
    <link rel="stylesheet" href="./css/register.min.css" / <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
    <link rel="manifest" href="./img/site.webmanifest">
    <link rel="mask-icon" href="./img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <div class="background-register">
        <p class="text-white m-5">Su numero de referente no es correcto, puede que lo haya escrito mal, comuniquese con su referente para comprobar la validez del numero introducido o elija de una lista de numeros de referente similares.</p>
        <div class="numerosReferente mx-auto">
            <?php
            echo "<table border='2' style='margin: 25px;' class='mx-auto p-3 text-white'>
    <tr>
    <th>id</th>
    <th>numero de referente</th>
    </tr>";

            while ($row = mysqli_fetch_array($resultReferentes)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . "<a href='nuevoNumRef.php' class='text-white'>" . $row['num_socio_ref_input'] . "</a>" . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            ?>
        </div>
    </div>


    <!-- Funciones JS -->
    <script src="./src/index.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>