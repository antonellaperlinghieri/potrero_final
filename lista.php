<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista completa de productos</title>
     <!-- ESTILOS CSS -->
     <link rel="stylesheet" href="assets/css/styles.css" />
    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
    <h1 class = "titulo">MUEBLERIA</h1>
    <p class = "textos">LA SIGUIENTE LISTA MUESTRA TODOS LOS PRODUCTOS ACTUALMENTE EN STOCK.</p>
    <table class="table table-bordered border-primary">
    <tr>
        <th>ID</th>
        <th>NOMBRE_PRODUCTO</th>
        <th>DESCRIPCION</th>
        <th>PRECIO</th>
        <th>IMAGEN</th>
        <th>IMAGEN1</th>
        <th>IMAGEN2</th>
        <th>EDITAR</th>
    </tr>
   </div>
    <?php
    // 1) Conexion
    include "php/conexion.php";
    mysqli_select_db($conexion,"qad7ort2fqaauzk2");
    // 2) Preparar la orden SQL
    // Sintaxis SQL SELECT
    // SELECT * FROM nombre_tabla
    // => Selecciona todos los campos de la siguiente tabla
    // SELECT campos_tabla FROM nombre_tabla
    // => Selecciona los siguientes campos de la siguiente tabla
    $consulta= "SELECT*FROM productos";
    // 3) Ejecutar la orden y obtenemos los registros
    $datos=mysqli_query ($conexion, $consulta);
    // 4) Mostrar los datos del registro
    while ($reg=mysqli_fetch_array($datos) ) { ?>
        <tr>
        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['nombreproducto']; ?></td>
        <td><?php echo $reg['descripcion']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
        <td><?php echo $reg['imagen']; ?></td>
        <td><?php echo $reg['imagen1']; ?></td>
        <td><?php echo $reg['imagen2']; ?></td>
        <td>
            <div class="btn-group">
                <button class="btn btn-primary" onclick="editarProducto(<?php echo $reg['id']; ?>)">editar</button>
                <button class="btn btn-danger" onclick="borrarProducto(<?php echo $reg['id']; ?>)">borrar</button>
            </div>
        </td>
        </tr>
    <?php } ?>
    </table>
    <button type="button" class="btn btn-outline-primary" id = "boton"><a href="inicio.php" id="button" style = "text-decoration : none;">VOLVER AL INICIO</a></button>
    <script type="text/javascript">
        <?php if ($_SESSION['usuario'] == "USUARIO_NO_ADMIN") { ?>
        function borrarProducto(id) {
            console.log(id);
            jQuery.ajax({
                type: "POST",
                url: "borra_productos.php",
                data: "id="+id,
                success: function(response) {			
                    alert(response);
                }
            });
        }
        <?php } ?>
        function editarProducto(id) {
            window.location.href = "producto.php?id=" +id;

        }
    </script>

 







<script src="assets/javascript/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>