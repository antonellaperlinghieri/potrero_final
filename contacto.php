<?php
if ($_POST['submit']) {
    //Obtenemos valores input formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $para = 'antonellaperlinghieri19988@gmail.com';

    //Creamos cabecera.
    $headers = 'From' . " " . $email . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8";

    //Componemos cuerpo correo.
    $msjCorreo = "Nombre: " . $name;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Email: " . $email;
    $msjCorreo .= "\r\n";
    $msjCorreo .= "Mensaje: " . $mensaje;
    $msjCorreo .= "\r\n";

  if (mail($para, $msjCorreo, $headers)) {
       echo "mensaje enviado";
  } else {
       echo "fallo";
  }
}

?>