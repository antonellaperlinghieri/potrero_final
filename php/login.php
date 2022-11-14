<?php
    include "conexion.php";
    session_start();
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and password = '$password' ");

    if(mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo;
        echo '<script> window.location =  "../inicio.php";  </script>';
    }else {
        echo '
        <script>
            alert("el usuario no existe");
            window.location = "../index.php";
        </script>';
    }
?>