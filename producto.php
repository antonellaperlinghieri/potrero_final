
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Productos</title>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <!-- BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <!-- MdBOOTSTRAP -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  </head>
  <body>
<!-- MENU -->
<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.php"> <img src="assets/imagenes/logo2.png" class="logo" alt="" srcset="" style="width: 60px;" /> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="inicio.php" id="link">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link" href="inicio.php">PRODUCTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link" href="agregar.html">AGREGAR PRODUCTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link" href="inicio.php">SOBRE NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link" href="inicio.php">GALERIA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link" href="inicio.php">CONTACTANOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link" href="lista.php">LISTA</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    <!-- CARDS -->
        <div class="container" id = "contenedor">
            <div class="row">
                    <div class="col-lg-6 col-xl-6 mx-auto mb-4">
                        <div class="card" style="border: none;">
                            <?php
                              // 1) Conexion
                              include "php/conexion.php";
                              $query='SELECT * FROM `productos` WHERE `id` = '.$_GET["id"];
                              // 3) Ejecutar la orden y obtenemos los registros
                              $datos= mysqli_query($conexion, $query);
                              // 4) el while recorre todos los registros y genera una CARD PARA CADA UNA
                              while ($reg = mysqli_fetch_array($datos)) {
                                ?>
                            <div class="card-body ">
                                <h5 class="card-title"><?php  echo ucwords($reg['nombreproducto']);  ?></h5>
                                <div class="product-price">
                                    $
                                    <?php  echo ucwords($reg['precio']);  ?>
                                </div>
                                <hr />
                                <h5 class="descripcion">DESCRIPCI??N DEL PRODUCTO</h5>
                                <p class = "text" style="color: black;">
                                    <?php  echo ucwords($reg['descripcion']);  ?>
                                </p>
                                <hr />
                                <h5 class="medio-pago">MEDIOS DE PAGO</h5>
                                <img src="assets/imagenes/medios-de-pago.png" class = "mercado-pago" alt="medio-pago" width="100px" />
                                <hr />
                            </div>
                        </div>
                    </div>
                    <!-- CAROUSEL -->
                    <div class="col-lg-6 col-xl-6 mx-auto mb-4" style = "margin-top:24px;">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img class="d-block w-100" src="assets/imagenes/<?php echo $reg['imagen'] ?>">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="assets/imagenes/<?php echo $reg['imagen1'] ?>">
                                </div>
                                <div class="carousel-item">
                                <img class="d-block w-100" src="assets/imagenes/<?php echo $reg['imagen2'] ?>">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                          </div>
                      </div>
                    <?php } ?>
<!-- MODAL DE EDICI??N DE PRODUCTOS -->
<button type="button" class="btn btn-info" id = "button-edit" data-bs-toggle="modal" data-bs-target="#exampleModal" style = "width:14%">
  EDITAR PRODUCTO
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">EDITAR PRODUCTO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style = "margin: 12px;">
      <?php
    include "php/conexion.php";
    mysqli_select_db($conexion,"qad7ort2fqaauzk2");
        // 2) Almacenamos los datos del env??o GET
        // a) generar variables para el id a utilizar
        $id = $_GET['id'];
        // 3) Preparar la SQL
        // => Selecciona todos los campos de la tabla alumno donde el campo id  sea igual a $id
        // a) generar la consulta a realizar
        $consulta = "SELECT * FROM productos WHERE id=$id";
        // 4) Ejecutar la orden y almacenamos en una variable el resultado
        // a) ejecutar la consulta
        $respuesta=mysqli_query ($conexion, $consulta);
        // 5) Transformamos el registro obtenido a un array
        $datos=mysqli_fetch_array($respuesta);
        // 6) asignamos a diferentes variables los respectivos valores del array $datos.
        $nombreproducto=$datos['nombreproducto'];
        $descripcion=$datos['descripcion'];
        $precio=$datos['precio'];
        $imagen=$datos['imagen'];
        $imagen1=$datos['imagen1'];
        $imagen2=$datos['imagen2'];
        ?>
        <p class = "text">INGRESE LOS NUEVOS DATOS DEL PRODUCTO.</p>
        <form action="" method="POST" enctype="multipart/form-data">
            <label style = "display: flex;" class = "text">nombreproducto</label>
            <input type="text" name="nombreproducto" value="<?php echo "$nombreproducto"; ?>">
            <label style = "display: flex;" class = "text" >descripcion</label>
            <input type="text" name="descripcion"  value="<?php echo "$descripcion"; ?>">
            <label style = "display: flex;" class = "text" >precio</label>
            <input type="text" name="precio" value="<?php echo "$precio"; ?>">
            <label style = "display: flex;" class = "text" >Imagen</label>
            <input type="file" name="imagen" placeholder="imagen">
            <label style = "display: flex;" class = "text">Imagen1</label>
            <input type="file" name="imagen1">
            <label style = "display: flex;" class = "text" >Imagen2</label>
            <input type="file" name="imagen2" >
            <input type="submit" name="guardar_cambios" class= "btn btn-info" value="Guardar Cambios" style = "margin:10px;">
            <button type="submit" class= "btn btn-info" name="Cancelar" formaction="lista.php" style = "margin:9px;">Cancelar</button>
        </form>
        <?php
        // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
        if(array_key_exists('guardar_cambios',$_POST)){
            // 2') Almacenamos los datos actualizados del env??o POST
            // a) generar variables para cada dato a almacenar en la bbdd
            // Si se desea almacenar una imagen en la base de datos usar lo siguiente:
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
            // 3') Preparar la orden SQL
            // "UPDATE tabla SET campo1='valor1', campo2='valor2', campo3='valor3', campo3='valor3', campo3='valor3' WHERE campo_clave=valor_clave"
            // a) generar la consulta a realizar
             $consulta = "UPDATE productos SET nombreproducto='$nombreproducto', descripcion='$descripcion', precio='$precio', imagen='$imagen', imagen1='$imagen1', imagen2 = '$imagen2' WHERE id=$id";
            // 4') Ejecutar la orden y actualizamos los datos
            // a) ejecutar la consulta
            mysqli_query($conexion,$consulta);
            // a) rederigir a index
          } ?>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
        </div>
    </div>
  </div>
</div>
</div>
</div>
<!--MERCADO PAGO -->
<?php
  require __DIR__ .  '/vendor/autoload.php';
  $access_token = 'TEST-8186029266366536-111107-819168999fefc2a6926978bdbcc869f0-253669475';
  // Agrega credenciales
  MercadoPago\SDK::setAccessToken($access_token);
  $preference = new MercadoPago\Preference();
  $productos = [];
  $item = new MercadoPago\Item();
  $item -> title = $nombreproducto;
  $item -> quantity = 1;
  $item -> unit_price = $precio;
  array_push($productos, $item);
  $preference -> items = $productos;
  $preference -> save();
?>
<div class="contenedor-btn">
</div>
<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
  var public_key = 'TEST-5842c625-7611-41ac-95fe-13c0a4ef07f3';
  const mp = new MercadoPago(public_key, {
    locale: 'es-AR'
  });

 const checkout = mp.checkout({
    preference: {
      id: '<?php echo $preference-> id; ?>'
    },
    render: {
      container: '.contenedor-btn',
      label: 'COMPRAR',
    }
  });
</script> <!--FIN MERCADO PAGO -->
<!-- FOOTER -->
<footer class="text-center text-lg-start bg-light text-muted" id="contactanos">
    <section class="d-flex justify-content-center justify-content-lg-center p-4 border-bottom">
        <div>
            <button type="button" class="btn btn-info" data-mdb-ripple-color="white"><a href="php/cerrar_sesion.php" id="cerrar-sesion"> CERRAR SESI??N</a></button>
        </div>
    </section>
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-2 col-xl-6 mx-auto mb-4">
                    <h1 class="text-uppercase fw-bold mb-4" id="contacto">Contacto</h1>
                    <p class="text" style="text-align: center;"><i class="bi bi-geo-alt"></i> BUENOS AIRES, 10012, AR</p>
                    <p class="text" style="text-align: center;"><i class="bi bi-envelope"></i> INFO@MUEBLERIA.COM</p>
                    <p class="text" style="text-align: center;"><i class="bi bi-phone"></i> 1145678920</p>
                    <p class="text" style="text-align: center;"><i class="bi bi-phone"></i> 1145654327</p>
                    <h1 class="text-uppercase fw-bold mb-4" id="contacto">
                        <a class="btn btn-primary btn-lg btn-floating" style="background-color: #ac2bac;" href="https://www.instagram.com/" role="button"><i class="fab fa-instagram"></i></a> Seguinos en nuestras redes
                    </h1>
                    <a class="navbar-brand" href="inicio.php"> <img src="assets/imagenes/logo2.png" class="logo2" alt="" srcset="" style="width: 25%; margin-left:38%;" /> </a>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        ?? 2022 Copyright:
        <a class="text-reset fw-bold">MUEBLERIA.COM</a>
    </div>
</footer>
<!-- Footer -->
<!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
    <script src="assets/javascript/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </script>
  </body>
</html>
