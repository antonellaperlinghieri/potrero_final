
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
         <!-- MdBOOTSTRAP --> 
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    </head>
    <body>
      <!-- MENU -->
    <header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.php"> <img src="assets/imagenes/logo2.png" class="logo" alt="" srcset="" style="width: 20%; justify-content: center;" /> </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </nav>
</header>
        <div class="container">
            <div class="row">
                    <div class="col-lg-6 col-xl-6 mx-auto mb-4" style = "margin-top: 21px;">
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
                                <h5 class="descripcion">DESCRIPCIÓN DEL PRODUCTO</h5>
                                <p style="color: gray;">
                                    <?php  echo ucwords($reg['descripcion']);  ?>
                                </p>
                                <hr />
                                <h5 class="medio-pago">MEDIOS DE PAGO</h5>
                                <img src="assets/imagenes/medios-de-pago.png" alt="medio-pago" width="100px" />
                                <hr />
                            </div>
                        </div>
                    </div>
                    <!-- CAROUSEL -->
                    <div class="col-lg-6 col-xl-6 mx-auto mb-4">
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
      </div>
        <!-- MODAL DE EDICIÓN DE PRODUCTOS -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
        // 2) Almacenamos los datos del envío GET
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
        <p>INGRESE LOS NUEVOS DATOS DEL PRODUCTO.</p>
        <form action="" method="POST" enctype="multipart/form-data">
            <label style = "display: flex;">nombreproducto</label>
            <input type="text" name="nombreproducto" value="<?php echo "$nombreproducto"; ?>">
            <label style = "display: flex;" >descripcion</label>
            <input type="text" name="descripcion"  value="<?php echo "$descripcion"; ?>">
            <label style = "display: flex;" >precio</label>
            <input type="text" name="precio" value="<?php echo "$precio"; ?>">
            <label style = "display: flex;" >Imagen</label>
            <input type="file" name="imagen" placeholder="imagen">
            <label style = "display: flex;" >Imagen1</label>
            <input type="file" name="imagen1">
            <label style = "display: flex;" >Imagen2</label>
            <input type="file" name="imagen2" >
            <input type="submit" name="guardar_cambios" class= "btn btn-primary" value="Guardar Cambios" style = "margin : 12px">
            <button type="submit" class= "btn btn-primary" name="Cancelar" formaction="lista.php">Cancelar</button>
        </form>
        <?php
        // Si en la variable constante $_POST existe un indice llamado 'guardar_cambios' ocurre el bloque de instrucciones.
        if(array_key_exists('guardar_cambios',$_POST)){
            // 2') Almacenamos los datos actualizados del envío POST
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
<footer class="text-center text-lg-start bg-light text-muted" id = "contactanos">
    <section class="d-flex justify-content-center justify-content-lg-center p-4 border-bottom">
        <div>
            <button type="button" class="btn btn-outline-dark"><a href="php/cerrar_sesion.php" id="cerrar-sesion"> CERRAR SESIÓN</a></button>
        </div>
    </section>
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-2 col-xl-6 mx-auto mb-4">
                    <h1 class="text-uppercase fw-bold mb-4" id = "contacto">Contacto</h1>
                    <p class = "parrafos"> <i class="bi bi-geo-alt"></i> Buenos Aires, 10012, AR</p>
                    <p class = "parrafos"> <i class="bi bi-envelope"></i> info@muebleria.com</p>
                    <p class = "parrafos"> <i class="bi bi-phone"></i> 1145678920</p>
                    <p class = "parrafos"> <i class="bi bi-phone"></i> 1145654327</p>
                    <h1 class="text-uppercase fw-bold mb-4" id = "contacto"> <a class="btn btn-primary btn-lg btn-floating" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a> Seguinos en nuestras redes </h1>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Copyright:
        <a class="text-reset fw-bold">muebleria.com</a>
    </div>
</footer>
<!-- Footer -->
        <script src="assets/javascript/script.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>
