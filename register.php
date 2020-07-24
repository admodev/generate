<?php

include('server.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
    <link rel="stylesheet" href="./css/register.min.css" />
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
    <div class="background-register">
        <div class="flecha-izquierda">
            <a href="index.php" class="text-white text-decoration-none"><i class="fas fa-arrow-left inicio-anchor"></i> Inicio</a>
        </div>
        <div class="flecha-derecha">
            <a href="login.php" class="text-white text-decoration-none">Ya tienes cuenta? <i class="fas fa-arrow-right cuenta-anchor"></i></a>
        </div>
        <div class="container my-auto formulario">
            <h1 class="text-white titulo-registro text-center mt-5">Registro</h1>
            <form method="POST" action="opciones_pago.php" class="mt-5 d-flex flex-lg-row formulario-columna">
                <div class="col-lg">
                    <input type="text" name="username" class="form-control m-2 w-75" placeholder="Usuario" required value="<?php echo $username; ?>">
                    <input type="email" name="email" class="form-control m-2" placeholder="Correo Electrónico" required value="<?php echo $email; ?>">
                    <input type="password" name="password_uno" class="form-control m-2" placeholder="Clave" required minlength="8">
                    <input type="password" name="password_dos" class="form-control m-2" placeholder="Repetir Clave" required minlength="8">
                    <input type="text" name="sponsor" class="form-control m-2" placeholder="Sponsor" required value="<?php echo $sponsor; ?>">
                    <input type="text" name="nombre" class="form-control m-2 w-75" placeholder="Nombre" required value="<?php echo $nombre; ?>">
                    <input type="text" name="apellido" class="form-control m-2 w-75" placeholder="Apellido" required value="<?php echo $apellido; ?>">
                    <input type="number" name="dni" class="form-control m-2 w-75" placeholder="DNI" required value="<?php echo $dni; ?>">
                    <input type="number" name="edad" class="form-control m-2 w-50" placeholder="Edad" required value="<?php echo $edad; ?>">
                    <select name="sexo" id="sexo" class="form-control m-2 w-50">
                        <option value="null">Sexo</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Transexual">Transexual</option>
                    </select>
                    <input type="tel" name="telefono" class="form-control m-2 w-50" placeholder="Teléfono" required value="<?php echo $telefono; ?>">
                    <input type="text" name="direccion" class="form-control m-2 w-75" placeholder="Dirección" required value="<?php echo $direccion; ?>">
                    <input type="text" name="pais" class="form-control m-2" placeholder="Pais" required value="<?php echo $pais; ?>">
                    <input type="text" name="provincia_estado" class="form-control m-2" placeholder="Provincia/Estado" required value="<?php echo $provincia_estado; ?>">
                    <input type="text" name="codigo_postal" class="form-control m-2 w-75" placeholder="Código Postal" required value="<?php echo $codigo_postal; ?>">
                </div>
                <div class="col-lg">
                    <select name="estudios" id="estudios" class="form-control m-2">
                        <option value="null">Nivel de estudios</option>
                        <option value="Ninguno">Ninguno</option>
                        <option value="Primario">Primario</option>
                        <option value="Secundario">Secundario</option>
                        <option value="Terciario">Terciario</option>
                        <option value="Universitario">Universitario</option>
                    </select>
                    <input type="text" name="profesion" class="form-control m-2" placeholder="Profesión" required value="<?php echo $profesion; ?>">
                    <input type="text" name="referido_por" class="form-control m-2" placeholder="Referido Por" required value="<?php echo $referido_por; ?>">
                    <select name="num_socio_ref" class="form-control m-2" required onchange="socioRef(this.value);">
                        <option value="null">Numero de socio referente</option>
                        <option value="No">No tengo numero de referente</option>
                        <option value="Si">Introduce el numero de referente</option>
                    </select>
                    <input type="text" name="num_socio_ref_input" id="numSocioRef" style="display: none;" class="form-control m-2" placeholder="Tengo numero de socio referente" value="<?php echo $num_socio_ref; ?>">
                    <select name="llegada_club" class="form-control m-2" onchange="llegadaClub(this.value);">
                        <option value="null">Como llegaste al club</option>
                        <option value="Referido">Referido</option>
                        <option value="Internet">Internet</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Google">Google</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Otro">Otro</option>
                    </select>
                    <input type="text" name="llegada_club_input" id="llegada" style="display: none;" class="form-control m-2 w-50" placeholder="Como llegaste al club" value="<?php echo $llegada_club; ?>">
                    <input type="text" name="ultimos_tres_exp" class="form-control m-2" placeholder="Tus ultimos 3 años de experiencia" required value="<?php echo $ultimos_tres_exp; ?>">
                    <input type="reset" value="Reiniciar Formulario" class="btn btn-danger m-2 p-2">
                    <input type="submit" name="reg_user" value="Registrarme" class="btn btn-success m-2 p-2">
                </div>
            </form>
        </div>
    </div>



    <!-- Funciones JS -->
    <script src="./src/index.js"></script>
    <!-- CAPTCHA -->

    <!-- BOOTSTRAP JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>