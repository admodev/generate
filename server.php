<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

//// Credenciales
MercadoPago\SDK::setAccessToken('PROD_ACCESS_TOKEN'); //TODO: generar y enlazar token de acceso

////// Crear objeto de preferencia
$preference = new MercadoPago\Preference();

//////// Crear un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Suscripcion Club Generate';
$item->quantity = 1;
$item->unit_price = 75.56; //TODO: poner precio real
$preference->items = array($item);
$preference->save();

// Inicializar variables

$username = "";
$email = "";
$sponsor = "";
$nombre = "";
$apellido = "";
$dni = "";
$edad = "";
$sexo = "";
$telefono = "";
$direccion = "";
$pais = "";
$provincia_estado = "";
$codigo_postal = "";
$estudios = "";
$profesion = "";
$referido_por = "";
$num_socio_ref = "";
$llegada_club = "";
$ultimos_tres_exp = "";
$activationcode = md5($email.time());
$status = 0;
$errors = array();

// Conectarse a la base de datos

$con = mysqli_connect('localhost', 'root', '11_De_Octubre_13', 'generate');

// Registrar usuario

if (isset($_POST['reg_user'])) {

    // Recibe todos los valores de input de los usuarios

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password_uno = mysqli_real_escape_string($con, $_POST['password_uno']);
    $password_dos = mysqli_real_escape_string($con, $_POST['password_dos']);
    $sponsor = mysqli_real_escape_string($con, $_POST['sponsor']);
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($con, $_POST['apellido']);
    $dni = mysqli_real_escape_string($con, $_POST['dni']);
    $edad = mysqli_real_escape_string($con, $_POST['edad']);
    $sexo = mysqli_real_escape_string($con, $_POST['sexo']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $direccion = mysqli_real_escape_string($con, $_POST['direccion']);
    $pais = mysqli_real_escape_string($con, $_POST['pais']);
    $provincia_estado = mysqli_real_escape_string($con, $_POST['provincia_estado']);
    $codigo_postal = mysqli_real_escape_string($con, $_POST['codigo_postal']);
    $estudios = mysqli_real_escape_string($con, $_POST['estudios']);
    $profesion = mysqli_real_escape_string($con, $_POST['profesion']);
    $referido_por = mysqli_real_escape_string($con, $_POST['referido_por']);
    $num_socio_ref = mysqli_real_escape_string($con, $_POST['num_socio_ref']);
    $num_socio_ref_input = mysqli_real_escape_string($con, $_POST['num_socio_ref_input']);
    $llegada_club = mysqli_real_escape_string($con, $_POST['llegada_club']);
    $llegada_club_input = mysqli_real_escape_string($con, $_POST['llegada_club_input']);
    $ultimos_tres_exp = mysqli_real_escape_string($con, $_POST['ultimos_tres_exp']);

    // Validación de formulario

    if (empty($username)) {
        array_push($errors, "No ingresaste un nombre de usuario.");
    }
    if (empty($email)) {
        array_push($errors, "No ingresaste un email.");
    }
    if (empty($password_uno)) {
        array_push($errors, "No ingresaste la contraseña");
    }
    if (empty($password_dos)) {
        array_push($errors, "No verificaste la contraseña");
    }
    if ($password_uno != $password_dos) {
        array_push($errors, "Las contraseñas no coinciden!");
    }
    if (empty($sponsor)) {
        array_push($errors, "No ingresaste tu sponsor.");
    }
    if (empty($nombre)) {
        array_push($errors, "No ingresaste tu nombre.");
    }
    if (empty($apellido)) {
        array_push($errors, "No ingresaste tu apellido.");
    }
    if (empty($dni)) {
        array_push($errors, "No ingresaste tu DNI.");
    }
    if (empty($edad)) {
        array_push($errors, "No ingresaste tu edad.");
    }
    if (empty($sexo)) {
        array_push($errors, "No seleccionaste tu sexo.");
    }
    if (empty($telefono)) {
        array_push($errors, "No ingresaste tu teléfono.");
    }
    if (empty($direccion)) {
        array_push($errors, "No ingresaste tu dirección");
    }
    if (empty($pais)) {
        array_push($errors, "No seleccionaste tu país.");
    }
    if (empty($provincia_estado)) {
        array_push($errors, "No ingresaste tu provincia/estado.");
    }
    if (empty($codigo_postal)) {
        array_push($errors, "No ingresaste tu código postal.");
    }
    if (empty($estudios)) {
        array_push($errors, "No ingresaste el estado de tus estudios.");
    }
    if (empty($profesion)) {
        array_push($errors, "No ingresaste tu profesión.");
    }
    if (empty($referido_por)) {
        array_push($errors, "No ingresaste tu referente.");
    }
    if (empty($num_socio_ref)) {
        array_push($errors, "No ingresaste el número de socio referente.");
    }
    if (empty($llegada_club)) {
        array_push($errors, "No detallaste tu llegada al club.");
    }
    if (empty($ultimos_tres_exp)) {
        array_push($errors, "No ingresaste tus últimos tres años de experiencia.");
    }

    // Checkea la base de datos para ver que no haya un usuario existente con los mismos datos

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Este usuario ya existe");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Este correo electronico se encuentra en uso");
        }
    }

    // Registra al usuario si no hay errores en el formulario ni la base de datos

    if (count($errors) == 0) {
        $password = md5($password_1);
        $query = "INSERT INTO users (username, email, password, sponsor, nombre, apellido, dni, edad, sexo, telefono, direccion, pais, provincia_estado, codigo_postal, estudios, profesion, referido_por, num_socio_ref, num_socio_ref_input, llegada_club, llegada_club_input, ultimos_tres_exp, activationcode, status) 
            VALUES('$username', '$email', '$password', '$sponsor', '$nombre', '$apellido', '$dni', '$edad', '$sexo', '$telefono', '$direccion', '$pais', '$provincia_estado', '$codigo_postal', '$estudios', '$profesion', '$referido_por', '$num_socio_ref', '$num_socio_ref_input', '$llegada_club', '$llegada_club_input', '$ultimos_tres_exp', '$activationcode', '$status')";
        mysqli_query($con, $query);
        $to=$email;
        $msg= "Gracias por registrarte!.";
        $subject="Email verification (Generate Argentina)";
        $headers .= "MIME-Version: 1.0"."\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
        $headers .= 'From:GenerateArgentina | Web <generateargentina.com.ar>'."\r\n";
        $ms.="<html></body><div><div>Estimado $name,</div></br></br>";
        $ms.="<div style='padding-top:8px;'>Por favor haz click en el enlace para confirmar tu cuenta, muchas gracias.</div>
            <div style='padding-top:10px;'><a href='http://localhost/generate/email_verification.php?code=$activationcode'>Click Aqui</a></div>
            <div style='padding-top:4px;'>Powered by <a href='generateargentina.com.ar'>generateargentina.com.ar</a></div></div>
            </body></html>";
        mail($to,$subject,$ms,$headers);
        echo "<script>alert('Registro completo, por favor corrobora tu id de email.');</script>";
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Ahora estás logueado!";
        header("Location: login.php");
        ini_set('session.cookie_lifetime',  10800);
    }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "El usuario es requerido");
    }
    if (empty($password)) {
        array_push($errors, "La clave es requerida");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($con, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Ahora estás logueado!";
            header("Location: ./panel/index.php");
            ini_set('session.cookie_lifetime',  10800);
        } else {
            array_push($errors, "Combinacion de usuario y clave incorrecta");
        }
    }
}
