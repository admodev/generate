<?php
session_start();

// use phpDocumentor\Reflection\Location;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

// Cargar variables de entorno globales

$dotenv = Dotenv\Dotenv::createImmutable('./');
$dotenv->load();

// Credenciales MP
// MercadoPago\SDK::setAccessToken('PROD_ACCESS_TOKEN');

// Crear objeto de preferencia
// $preference = new MercadoPago\Preference();

// Crear un item en la preferencia
// $item = new MercadoPago\Item();
// $item->title = 'Suscripcion Club Generate';
// $item->quantity = 1;
// $item->unit_price = 7300.46;
// $preference->items = array($item);
// $preference->save();

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
// $activationcode = md5($email . time());
// $status = 0;
$errors = array();

$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

$dbUser = $_ENV['DB_USER'];
$dbPassword = $_ENV['DB_PASS'];
$dbHost = $_ENV['DB_HOST'];
$dbName = $_ENV['DB_NAME'];

$con = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

if (isset($_POST['reg_user'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);
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

    if (empty($username)) {
        array_push($errors, "No ingresaste un nombre de usuario.");
    }
    if (empty($email)) {
        array_push($errors, "No ingresaste un email.");
    }
    if (empty($password_1)) {
        array_push($errors, "No ingresaste la contraseña");
    }
    if (empty($password_2)) {
        array_push($errors, "No verificaste la contraseña");
    }
    if ($password_1 != $password_2) {
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

    $user_check_query = "SELECT * FROM users WHERE username=`$username` OR email=`$email` LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Este usuario ya existe");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Este correo electronico ya se encuentra en uso");
        }
    }

    // Verificar número de referente

    // $check_ref = "SELECT num_socio_ref_input FROM users WHERE num_socio_ref_input LIKE '%{$num_socio_ref_input}%'";

    // $check_ref_query = mysqli_query($con, $check_ref);

    // if (is_null($check_ref_query) || empty($num_socio_ref_input)) {
    //     array_push($errors, "Numero de referente invalido");
    //     header('location: lista_referentes.php');
    // }

    if (count($errors) == 0) {
        $password = md5($password_1);
        $query = "INSERT INTO users (username, email, password, sponsor, nombre, apellido, dni, edad, sexo, telefono, direccion, pais, provincia_estado, codigo_postal, estudios, profesion, referido_por, num_socio_ref, num_socio_ref_input, llegada_club, llegada_club_input, ultimos_tres_exp) 
            VALUES('$username', '$email', '$password', '$sponsor', '$nombre', '$apellido', '$dni', '$edad', '$sexo', '$telefono', '$direccion', '$pais', '$provincia_estado', '$codigo_postal', '$estudios', '$profesion', '$referido_por', '$num_socio_ref', '$num_socio_ref_input', '$llegada_club', '$llegada_club_input', '$ultimos_tres_exp')";
        mysqli_query($con, $query);

        // $to = $email;
        // $msg = "Gracias por registrarte!.";
        // $subject = "Email verification (Generate Argentina)";
        // $headers .= "MIME-Version: 1.0" . "\r\n";
        // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        // $headers .= 'From:generateargentina@yahoo.com | Web <generateargentina.com.ar>' . "\r\n";
        // $ms .= "<html></body><div><div>Estimado $name,</div></br></br>";
        // $ms .= "<div style='padding-top:8px;'>Por favor haz click en el enlace para confirmar tu cuenta, muchas gracias.</div>
        //     <div style='padding-top:10px;'><a href='http://localhost/generate/email_verification.php?code=$activationcode'>Click Aqui</a></div>
        //     <div style='padding-top:4px;'>Powered by <a href='generateargentina.com.ar'>generateargentina.com.ar</a></div></div>
        //     </body></html>";
        // mail($to, $subject, $ms, $headers);
        // echo "<script>alert('Registro completo, por favor corrobora tu id de email.');</script>";
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Ahora estás registrado!";
        header("Location: confirmacion.php");
    }
}
