<?php
    include "php/conexion.php";
    $id = $_POST['id'];
    $consulta = "DELETE FROM `productos` WHERE `id` =  $id";
    $respuesta=mysqli_query($conexion, $consulta); 
    echo "borramos el id ". $id;

?>