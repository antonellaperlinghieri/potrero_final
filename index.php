<?php 
    session_start();
    if(isset($_SESSION['usuario'])) {
        echo '<script>
            window.location = "index.php";
        </script>';
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>tienda</title>
        <link rel="stylesheet" href="assets/css/styles.css" />
    </head>
    <body>
        <main>
            <div class="contenedor-todo">
                <div class="caja-trasera">
                    <div class="caja-trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión</p>
                        <button id="btn-iniciar-sesion">Iniciar Sesion</button>
                    </div>
                    <div class="caja-trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Registrate para iniciar sesión</p>
                        <button id="btn-registrarse">Registrarse</button>
                    </div>
                </div>
                <!-- FORMULARIO DE LOGIN Y REGISTRO-->
                <div class="contenedor-login-register">
                    <!--LOGIN-->
                    <form action="php/login.php" method = "POST" class="formulario-login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="correo_electronico" name = "correo">
                        <input type="password" placeholder="password" name = "password">
                        <button> Ingresar </button>
                    </form>
                    <!--REGISTRO-->
                    <form action="php/registro_usuario.php" method = "POST" class="formulario-register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="nombre_completo" name = "nombre_completo">
                        <input type="text" placeholder="correo_electronico" name = "correo">
                        <input type="text" placeholder="usuario" name = "usuario">
                        <input type="password" placeholder="password" name = "password">
                        <button>Registrarse</button>
                    </form>
                </div>
            </div>
        </main>
        <script src="assets/javascript/script.js"></script>
    </body>
</html>
