<?php

include('server.php');

$queryReferentes = "SELECT num_socio_ref_input FROM users WHERE id <= 10";
$resultReferentes = mysqli_query($con, $queryReferentes);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate</title>
</head>

<body>
    <p>Su numero de referente no es correcto, puede que lo haya escrito mal, comuniquese con su referente para comprobar la validez del numero introducido o elegir de una lista de numeros de referente similares.</p>
    <div class="numerosReferente">
        <?php
        echo "<table border='2' style='margin: 25px;'>
                            <tr>
                            <th>id</th>
                            <th>numero de referente</th>
                            </tr>";

        while ($row = mysqli_fetch_array($resultReferentes)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['num_socio_ref_input'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>

</html>