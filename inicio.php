
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <!-- FONTAWESOME-->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <!--CHATCOMPOSER -->
    <link href="https://trial.chatcompose.com/static/trial/all/global/export/css/main.5b1bd1fd.css" rel="stylesheet">    
    <script async type="text/javascript" src="https://trial.chatcompose.com/static/trial/all/global/export/js/main.a7059cb5.js?user=trial_antonellaP&lang=ES" user="trial_antonellaP" lang="ES"></script> 
    <!-- MdBOOTSTRAP --> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
</head>
<body>
    <!-- MENU Y BANNER -->
<header>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="inicio.php"> <img src="assets/imagenes/logo2.png" class = "logo" alt="" srcset="" style = "width : 25%; justify-content: center;"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
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
        <li class="nav-item">
          <a class="nav-link" id = "link" href="lista.php">LISTA</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<!-- SLIDER -->
<section class="slider_section " id = "inicio">
      <div class="number_box">
        <div>
          <ol class="carousel-indicators indicator-2">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
          </ol>
        </div>
      </div>
      <div class="container">
        <div id="carouselExampleIndicators"  class="carousel slide" data-ride="carousel" style = "width:100%;">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      ENCONTRA TU
                      <span>
                        CONFORT
                      </span>
                    </h1>
                  </div>
                </div>
                <div class="col-md-6 img-container">
                  <div class="img-box">
                    <img src="assets/imagenes/slider.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      12 CUOTAS
                      <span>
                      SIN INTERES
                      </span>
                    </h1>
                    <p class = "text">
                      SHOWROOM EN CABA CON TODOS LOS PRODUCTOS EXHIBIDOS.
                    </p>
                  </div>
                </div>
                <div class="col-md-6 img-container">
                  <div class="img-box">
                    <img src="assets/imagenes/sofa.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      SOMOS
                      <span>
                        FABRICANTES
                      </span>
                    </h1>
                    <p class = "text">
                      ENVIOS A TODO EL PAIS.
                    </p>
                  </div>
                </div>
                <div class="col-md-6 img-container">
                  <div class="img-box">
                    <img src="assets/imagenes/sofa3.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      FABRICAMOS LOS MUEBLES DE TUS 
                      <span>
                        SUEÑOS
                      </span>
                    </h1>
                  </div>
                </div>
                <div class="col-md-6 img-container">
                  <div class="img-box">
                    <img src="assets/imagenes/sofa2.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<div class="box">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <i class="bi bi-credit-card-fill" aria-hidden="true"></i>
                    <div class="title-3">
                        <h3>¡PAGÁ EN CUOTAS! </h3>
                    </div>
                    <div class="text">
                        <span> CON TU TARJETA DE CRÉDITO. </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <i class="bi bi-truck-front-fill" aria-hidden="true"></i>
                    <div class="title-3">
                        <h3> ENVÍOS GRATIS EN CABA </h3>
                    </div>
                    <div class="text">
                        <span> PARA COMPRAS DE MÁS DE $50.000 </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="box-part text-center">
                    <i class="bi bi-shield-lock-fill" aria-hidden="true"></i>
                    <div class="title-3">
                        <h3> SITIO SEGURO </h3>
                    </div>
                    <div class="text">
                        <span> PROTEGEMOS TUS DATOS </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- CARDS -->
  <div class="container">
  <h1 class = "title-productos"  id = "productos" style = "text-align : center;"> NUESTROS PRODUCTOS</h1>
</div>
  <div class="container">
      <div class="row" style = "--mdb-gutter-x: 4rem;">
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
              <span style = "color:black;">$ <?php echo $reg['precio']; ?></span>
              <a href = "producto.php?id=<?php echo $reg['id']; ?>" class = "link">Ver producto</a>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>
    <!-- SECCIÓN SOBRE NOSOTROS -->
       <!-- Services Start -->
       <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                    <h1 class="title">IMPRESIONANTE SERVICIOS DE DISEÑOS DE INTERIORES PARA SU HOGAR</h1>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0" style = "width:100%;">
                <a class="btn btn-info mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-info mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://cdn.pixabay.com/photo/2017/08/02/01/01/living-room-2569325_960_720.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://cdn.pixabay.com/photo/2015/10/20/18/57/furniture-998265_960_720.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://cdn.pixabay.com/photo/2017/03/28/12/11/chairs-2181960_960_720.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x380" src="https://cdn.pixabay.com/photo/2016/08/26/15/06/home-1622401_960_720.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://cdn.pixabay.com/photo/2016/09/22/11/55/kitchen-1687121_960_720.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://cdn.pixabay.com/photo/2016/11/23/14/29/living-room-1853203_960_720.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://cdn.pixabay.com/photo/2016/11/19/13/06/bed-1839183_960_720.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://cdn.pixabay.com/photo/2015/12/05/23/38/nursery-1078923_960_720.jpg">
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" alt="100%x280" src="https://cdn.pixabay.com/photo/2020/11/24/11/36/bedroom-5772286_960_720.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
    <section class="py-5 text-center" id = "sobre_nosotros">
    <div class="row py-lg-5">
        <img src=" assets/imagenes/banner.jpg" alt="" srcset="" />
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-xl-6 mx-auto mb-4" style=" margin-left: auto;">
        <h1 class="title">SOBRE NOSOTROS</h1>
          <p class = "text"> DESDE 1960, SE HA CONVERTIDO EN UN REFERENTE INDISCUTIDO A LA HORA DE BUSCAR DISEÑOS, CALIDAD Y CONFORT. DURANTE MÁS DE 60 AÑOS NOS HEMOS DEDICADO EXCLUSIVAMENTE A FABRICAR Y DISTRIBUIR PRODUCTOS CON LA ÚLTIMA TECNOLOGÍA, QUE
            BRINDEN EL MÁXIMO CONFORT EN MOVIMIENTO. CONTAMOS CON UNA TIENDA DE MÁS DE 3300 M², UN ESPACIO CON LA MÁS AMPLIA VARIEDAD DE PRODUCTOS CREADOS PARA EL CONFORT. LA ELECCIÓN PERSONALIZADA DE LA TAPICERÍA HACE DE CADA PRODUCTO UNA
            PIEZA ÚNICA.</p>
        </div>
        <div class="col-lg-6 col-xl-6 mx-auto mb-4 ">
            <img src="assets/imagenes/smooth_armchair_1__1.png" alt="" width="70%" class="silla" />
        </div>
    </div>
</div>
<!--GALERIA CAROUSEL -->
<div class="container" id = "galeria">
   <div class="row">
      <h1 class = "title col-lg-6 col-xl-6 mx-auto mb-4" style = "text-align : center;">  PRODUCTOS DESTACADOS </h1>
      <div class="container">
        <div class="row">
            <div class="col-6 text-right">
                <a class="btn btn-info mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-info mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
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
            <button type="button" class="btn btn-info" data-mdb-ripple-color="white"><a href="php/cerrar_sesion.php" id="cerrar-sesion"> CERRAR SESIÓN</a></button>
        </div>
    </section>
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-2 col-xl-6 mx-auto mb-4">
                    <h1 class="text-uppercase fw-bold mb-4" id = "contacto">Contacto</h1>
                    <p class = "text" style = "text-align:center;"> <i class="bi bi-geo-alt"></i> BUENOS AIRES, 10012, AR</p>
                    <p class = "text" style = "text-align:center;"> <i class="bi bi-envelope"></i> INFO@MUEBLERIA.COM</p>
                    <p class = "text" style = "text-align:center;"> <i class="bi bi-phone"></i> 1145678920</p>
                    <p class = "text" style = "text-align:center;"> <i class="bi bi-phone"></i> 1145654327</p>
                    <h1 class="text-uppercase fw-bold mb-4" id = "contacto"> <a class="btn btn-primary btn-lg btn-floating" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a> Seguinos en nuestras redes </h1>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022 Copyright:
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