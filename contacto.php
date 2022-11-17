<?php
include "php/conexion.php";
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


?>