
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="assets/css/styles.css" />
    <!-- BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
</head>
<body>
    <!-- MENU Y BANNER -->
<header>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="inicio.php"> <img src="assets/imagenes/logo.png" class = "logo" alt="" srcset="" style = "width : 50%; justify-content: center;"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <img src="https://cdn-icons-png.flaticon.com/512/5259/5259005.png" alt = "" width = "20px" >
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#inicio" id = "link">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id= "link" href="#productos">PRODUCTOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id= "link" href="agregar.html">AGREGAR PRODUCTOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id = "link" href="#sobre_nosotros">SOBRE NOSOTROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id = "link" href="#galeria">GALERIA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id = "link" href="#contactanos">CONTACTANOS</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<section class="py-5 ">
    <div class="row py-lg-2">
        <img src="assets/imagenes/banner1.png" alt="" class = "banner" srcset="">
    </div>
</section>
  <!-- CARDS -->
  <div class="container">
  <h1 class = "title-productos"  id = "productos" style = "text-align : center;"> ALGUNOS DE NUESTROS PRODUCTOS</h1>
</div>
  <div class="container">
      <div class="row">
        <?php
        // 1) Conexion
        $conexion = mysqli_connect("h1use0ulyws4lqr1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "fdxnogh9ulra5ujq", "uycgjx70mu3k9vex", "qad7ort2fqaauzk2");
        $query='SELECT * FROM productos';
        // 3) Ejecutar la orden y obtenemos los registros
        $datos= mysqli_query($conexion, $query);
        // 4) el while recorre todos los registros y genera una CARD PARA CADA UNA
        while ($reg = mysqli_fetch_array($datos)) {?>
          <div class="card col-md-3 col-lg-4 col-xl-4 mx-auto mb-4 " style = "border:none;">
            <img class="card-img-top img-responsive" src="assets/imagenes/<?php echo $reg['imagen'] ?>" alt="" ><h3 class="card-title"><?php echo ucwords($reg['nombreproducto']) ?></h3>
              <span>$ <?php echo $reg['precio']; ?></span>
              <a href = "producto.php?id=<?php echo $reg['id']; ?>" class = "link">Ver producto</a>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>
    <!-- SECCIÓN SOBRE NOSOTROS -->
    <section class="py-5 text-center" id = "sobre_nosotros">
    <div class="row py-lg-5">
        <img src=" assets/imagenes/banner.jpg" alt="" srcset="" />
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-4 col-xl-6 mx-auto mb-4" style=" margin-left: auto;">
        <h1 class="title col-lg-6 col-xl-6 mx-auto mb-4">SOBRE NOSOTROS</h1>
            Desde 1960, se ha convertido en un referente indiscutido a la hora de buscar diseño, calidad y confort. Durante más de 60 años nos hemos dedicado exclusivamente a fabricar y distribuir productos con la última tecnología, que
            brinden el máximo confort en movimiento. Contamos con una tienda de más de 3300 m², un espacio con la más amplia variedad de productos creados para el confort. La elección personalizada de la tapicería hace de cada producto una
            pieza única.
        </div>
        <div class="col-lg-6 col-xl-6 mx-auto mb-4 ">
            <img src="assets/imagenes/smooth_armchair_1__1.png" alt="" width="70%" class="silla" />
        </div>
    </div>
</div>
<!--GALERIA CAROUSEL -->
<div class="container" id = "galeria">
   <div class="row">
      <h1 class = "title col-lg-6 col-xl-6 mx-auto mb-4" style = "text-align : center;"> TODOS NUESTROS PRODUCTOS</h1>
      <div class="container">
        <div class="row">
            <div class="col-6 text-right">
                <a class="btn btn-dark mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-dark mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src=" https://mijormi.vteximg.com.br/arquivos/ids/177146-1000-1332/Vtex-0A7A2078.jpg?v=637969402089430000">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src=" https://mijormi.vteximg.com.br/arquivos/ids/174518-1000-1332/Lampara-colgante-moderna-VIRGO-BLACK-_-BRONCE-Landmark-0.jpg?v=637769852893000000">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src=" https://mijormi.vteximg.com.br/arquivos/ids/176992-1000-1332/Hamaca-de-ratan-negro-KAY-BLACK-Landmark-01.jpg?v=637953181102170000 ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x380" src=" https://mijormi.vteximg.com.br/arquivos/ids/167526-1000-1332/Landmark-Decor-CARDIFF-COBRE-RelojDePared-0.jpg?v=637483923263100000 ">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src=" https://mijormi.vteximg.com.br/arquivos/ids/157641-1000-1332/Landmark-Muebles-PRINCESS-2075X45X80-Cajonero-0.jpg?v=637063223964400000">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://mijormi.vteximg.com.br/arquivos/ids/168989-1000-1332/Landmark-Decor-TabaquilloGris-Espejo-1.jpg?v=637526234628900000 ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src=" https://mijormi.vteximg.com.br/arquivos/ids/177116-1000-1332/Silla-de-comedor-pana-gris-pata-cromada-MALAIKA-DARK-GREY-Landmark-01.jpg?v=637963453149300000">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://mijormi.vteximg.com.br/arquivos/ids/172310-1000-1332/APLIQUE-DE-PARED-CROMADO-EDIE-BRILLANTE-Landmark-0.jpg?v=637637699866300000 ">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src=" https://mijormi.vteximg.com.br/arquivos/ids/162121-1000-1332/Landmark-Muebles-AsherCigar-Sillon-0.jpg?v=637318019930100000">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  </div>
</div>
<!-- FOOTER -->
<footer class="text-center text-lg-start bg-light text-muted" id = "contactanos">
    <section class="d-flex justify-content-center justify-content-lg-center p-4 border-bottom">
        <div>
            <button type="button" class="btn btn-outline-dark"><a href="index.php" id="iniciar-sesion">INICIAR SESIÓN</a></button>
            <button type="button" class="btn btn-outline-dark"><a href="php/cerrar_sesion.php" id="cerrar-sesion"> CERRAR SESIÓN</a></button>
        </div>
    </section>
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-2 col-xl-6 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4" id = "contacto">Contacto</h6>
                    <p class = "parrafos"> <i class="bi bi-geo-alt"></i> Buenos Aires, 10012, AR</p>
                    <p class = "parrafos"> <i class="bi bi-envelope"></i> info@muebleria.com</p>
                    <p class = "parrafos"> <i class="bi bi-phone"></i> 1145678920</p>
                    <p class = "parrafos"> <i class="bi bi-phone"></i> 1145654327</p>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Copyright:
        <a class="text-reset fw-bold">Muebleria.com</a>
    </div>
</footer>
<!-- Footer -->
<script src="assets/javascript/script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>