<?php 
    include "conexion.php"; 
    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, password) VALUES('$nombre_completo', '$correo', '$usuario', '$password')";

    // VERIFICAR QUE EL CORREO NO SE REPITA EN LA BASE DE DATOS
    $verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo = '$correo'");
    if (mysqli_num_rows($verificar_correo) > 0) {
        echo '<script>
            alert("El correo ya existe, intenta con otro");
            window.location = "../index.php";
        </script>';
        exit();
    }
    $ejecutar = mysqli_query($conexion,$query);
    if ($ejecutar) {
        echo '<script> alert("usuario almacenado");
        window.location = "../index.php";
        </script>';
    }else {
        echo '<script> alert("Intentalo de nuevo");
        window.location = "../index.php";
        </script>';
    }
    mysqli_close($conexion);
?>