<?php
$name = $_POST['name'];
$from = $_POST['email'];
$message = $_POST['mensaje']; 
$subject = "Mensaje desde la muebleria";
$to = 'antonellaperlinghieri19988@gmail.com'; 

$body = "De: $name\n E-Mail: $from\n Mensaje:\n $message";

if (mail ($to, $subject, $body, $from)) { 
    echo '<p style="color: #27ae60;">Your message has been sent!</p>';
} else { 
    echo '<p style="color: #c0392b;">Something went wrong, go back and try again!    </p>'; 
}



# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;
# Instantiate the client.
$mgClient = new Mailgun('bb81a44c4263d2a9030631b137b39948-2de3d545-47b30fe3');
$domain = "https://api. mailgun.net/v3/ sandbox84a3c56c18114327b1840baf23c3329e.mailgun.org";
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
	'from'	=> $from,
	'to'	=> $to,
	'subject' => $subject,
	'text'	=> $message
));


?>