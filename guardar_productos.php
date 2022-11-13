<?php 
      $conexion = mysqli_connect("mysql://fdxnogh9ulra5ujq:uycgjx70mu3k9vex@h1use0ulyws4lqr1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/qad7ort2fqaauzk2", "fdxnogh9ulra5ujq	", "uycgjx70mu3k9vex", "qad7ort2fqaauzk2");
    $nombreproducto = $_POST['nombreproducto'];
	$descripcion = $_POST ['descripcion'];
	$precio = $_POST ['precio'];
	$imagen = $_FILES['imagen']['name'];
    $ruta = $_FILES['imagen']['tmp_name'];
    $destino = "assets/imagenes/".$imagen;
	$imagen1 = $_FILES['imagen1']['name'];
    $ruta = $_FILES['imagen1']['tmp_name'];
    $destino = "assets/imagenes/".$imagen1;
	$imagen2 = $_FILES['imagen2']['name'];
    $ruta = $_FILES['imagen2']['tmp_name'];
    $destino = "assets/imagenes/".$imagen2;
    copy($ruta,$destino);
    //die ($nombreproducto ." ". $descripcion  ." ".$precio  ." ". $imagen);
    $query = "INSERT INTO `productos`(`nombreproducto`, `descripcion`, `precio`, `imagen`, `imagen1`, `imagen2`) VALUES ('$nombreproducto','$descripcion','$precio','$imagen', '$imagen1', '$imagen2' )";
	$ejecutar = $conexion->query($query);

	if($ejecutar) {
		echo "se inserto";
	}else {
		echo "no se inserto";
	}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>guardar</title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
          <!-- BOOTSTRAP-->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
    <body>
    <button type="button" class="btn btn-outline-dark"><a href="inicio.php">INICIO</a></button>
  <script src="assets/javascript/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>
