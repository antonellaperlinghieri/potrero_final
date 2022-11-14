
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>productos</title>
        <!-- ESTILOS CSS -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        <!-- BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="inicio.php"> <img src="assets/imagenes/logo.png" alt="" srcset="" style="width: 50%;" ; /> </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <img src="https://cdn-icons-png.flaticon.com/512/5259/5259005.png" alt="" width="20px" />
                        </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="inicio.php" id="link">INICIO</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <?php
          // 1) Conexion
    include "php/conexion.php";
    $id = $_GET['id'];
    $consulta = "SELECT * FROM `productos` WHERE id = $id";
    $respuesta=mysqli_query($conexion, $consulta); 
    $datos = mysqli_fetch_array($respuesta);
        $nombreproducto = $datos['nombreproducto'];
        $descripcion = $datos['descripcion'];
        $precio = $datos['precio'];
        $imagen = $datos['imagen']['name'];
        $ruta = $datos['imagen']['tmp_name'];
        $destino = "assets/imagenes/" . $imagen;
        $imagen1 = $datos['imagen1']['name'];
        $ruta = $datos['imagen1']['tmp_name'];
        $destino = "assets/imagenes/" . $imagen1;
        $imagen2 = $datos['imagen2']['name'];
        $ruta = $datos['imagen2']['tmp_name'];
        $destino = "assets/imagenes/" . $imagen2;

?>
<!-- FORMULARIO-->
<h2>MODIFICAR</h2>
<p>Ingrese los nuevos datos</p>
<form method="POST" action="editar.php" enctype="multipart/form-data">
    <input type="hidden" name="id"value = "<?php echo $datos["$id"]; ?>">>
    <label> Nombre del producto </label>
    <input type="text" name="nombreproducto" required value = "<?php echo $datos["$nombreproducto"]; ?>">
    <label>Descripcion</label>
    <input type="text" name="descripcion" required value = "<?php echo $datos ["$descripcion"]; ?>">
    <label>Precio</label>
    <input type="text" name="precio" required value = "<?php echo $datos["$precio"]; ?>">
    <label> Imagen </label>
    <input type="file" name="imagen" value = "<?php echo $datos["$imagen"]; ?>">
    <input type="submit" name="submit" value="Ingresar" />
    <input type="file" name="imagen1" value = "<?php echo $datos["$imagen1"]; ?>">
    <input type="submit" name="submit" value="Ingresar" />
    <input type="file" name="imagen2" value = "<?php echo $datos["$imagen2"]; ?>">
    <input type="submit" name="guardar_cambios" value="guardar_cambios" />
</form>
<?php if (array_key_exists('guardar_cambios', $_POST)) {
     $nombreproducto = $_POST['nombreproducto'];
     $descripcion = $_POST['descripcion'];
     $precio = $_POST['precio'];
     $imagen = $_FILES['imagen']['name'];
     $ruta = $_FILES['imagen']['tmp_name'];
     $destino = "assets/imagenes/" . $imagen;
     $imagen1 = $_FILES['imagen1']['name'];
     $ruta = $_FILES['imagen1']['tmp_name'];
     $destino = "assets/imagenes/" . $imagen1;
     $imagen2 = $_FILES['imagen2']['name'];
     $ruta = $_FILES['imagen2']['tmp_name'];
     $destino = "assets/imagenes/" . $imagen2;
     $consulta = "UPDATE productos SET nombreproducto = '$nombreproducto', descripcion = '$descripcion', precio = '$precio',imagen = '$imagen', imagen1 = '$imagen1', imagen2 = '$imagen2' WHERE id = $id";
     mysqli_query($conexion, $consulta);
     header("location : lista.php");
 } ?>

    </body>
</html>