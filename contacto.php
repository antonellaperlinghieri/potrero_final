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


require 'vendor/autoload.php';

// Create the Transport
$transport = Swift_SmtpTransport::newInstance('smtp.mailgun.org', 587)
  ->setUsername('postmaster@sandbox84a3c56c18114327b1840baf23c3329e.mailgun.org')
  ->setPassword('a53ba9578ae9d85f19d5c74a01289b9e-2de3d545-83fd170f')
  ;

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance('Hello from Mailgun')
  ->setFrom(array($from => 'John Doe'))
  ->setTo(array($to => 'A third name'))
  ->setBody("And that's another ace in the hole for the Mailgun dev!")
  ;

// Send the message
$result = $mailer->send($message);

?>