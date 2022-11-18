<?php
require '../vendor/autoload.php';
use Mailgun\Mailgun;
    //Obtenemos valores input formulario
    $name = $_POST['name'];
    $from = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $para = 'antonellaperlinghieri19988@gmail.com';
    $mgClient = new Mailgun('fb12fa0ecd924e366a7a1c1b39261cf5-2de3d545-16924a94');
    $domain = "sandbox135942d4cc284493910e6dfaab12dfce.mailgun.org";
    
    # Make the call to the client.
    $result = $mgClient->sendMessage("$domain",
         array('from'    => $from,
                'to'      => $para,
                'subject' => 'ENVIADO CON EXITO',
                'template'    => 'antonella',
                'h:X-Mailgun-Variables'    => '{"test": "test"}'));
?>
