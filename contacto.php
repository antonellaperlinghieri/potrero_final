<?php
$name = $_POST['name'];
$from = $_POST['email'];
$message = $_POST['mensaje']; 
$subject = "Mensaje desde la muebleria";
$to = 'antonellaperlingheiri19988@gmail.com'; 

$body = "De: $name\n E-Mail: $from\n Mensaje:\n $message";

if (mail ($to, $subject, $body, $from)) { 
    echo '<p style="color: #27ae60;">Your message has been sent!</p>';
} else { 
    echo '<p style="color: #c0392b;">Something went wrong, go back and try again!    </p>'; 
}

// Using default PHP curl library
$ch = curl_init('https://realemail.expeditedaddons.com/?api_key=VC9QI3ZRP541T2606S8A787YFX43EG5KHWM9L0BND21JUO&email=email@example.org&fix_typos=false');

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
?>