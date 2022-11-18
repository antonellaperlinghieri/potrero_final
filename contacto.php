<?php
require '/vendor/autoload.php';
use Mailgun\Mailgun;
session_start();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message =  $_POST['mensaje'];
    # Instantiate the client.
    $mgClient = new Mailgun('fb12fa0ecd924e366a7a1c1b39261cf5-2de3d545-16924a94');
    $domain = "sandbox135942d4cc284493910e6dfaab12dfce.mailgun.org";
    # Make the call to the client.
    $result = $mgClient->sendMessage($domain, array(
        'from'    => $name . ' <' . $email . '>',
        'to'      => 'antonellaperlinghieri19988@gmail.com',
        'subject' => 'MENSAJE ENVIADO CON EXITO',
        'text'    => $message
    ));
}
?>
