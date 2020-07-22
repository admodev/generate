<?php
    require_once 'vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("ENV_ACCESS_TOKEN");

    $payment = new MercadoPago\Payment();
    $payment->transaction_amount = 102;
    $payment->token = "ff8080814c11e237014c1ff593b57b4d";
    $payment->description = "Aerodynamic Marble Coat";
    $payment->installments = 1;
    $payment->payment_method_id = "visa";
    $payment->payer = array(
    "email" => "archibald_wintheiser@yahoo.com"
    );

    $payment->save();


    echo $payment->status;

?>

