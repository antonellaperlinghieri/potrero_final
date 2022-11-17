<?php

if (isset($_POST['submit'])) {
    //Obtenemos valores input formulario
    $nombre = $_POST['nAME'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $para = 'antonellaperlinghieri19988@gmail.com';

    //Creamos cabecera.
    $headers = 'From' . " " . $email . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8";

    //Componemos cuerpo correo.
    $msjCorreo = "Nombre: " . $nombre;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Email: " . $email;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Mensaje: " . $mensaje;
    $msjCorreo .= "\r\n";

  if (mail($para, $msjCorreo, $headers)) {
       echo "<script language='javascript'>
          alert('Mensaje enviado, muchas gracias.');
       </script>";
  } else {
       echo "<script language='javascript'>
          alert('fallado');
       </script>";
  }
}

?>