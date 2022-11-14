<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>agregar</title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
          <!-- BOOTSTRAP-->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
    <body>

            <!-- MODAL DE AGREGAR DE PRODUCTOS -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style = "margin: 12px;" >
    AGREGAR PRODUCTO
  </button>
  <button type="button" class="btn btn-outline-dark"><a href="inicio.php" id="button" style = "text-decoration : none;">VOLVER AL INICIO</a></button>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" >AGREGAR PRODUCTO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style = "margin: 12px;">
          <h2>Agregar</h2>
          <p>Ingrese los  datos del producto.</p>
          <form method="POST" action="guardar_productos.php" enctype="multipart/form-data">
            <label  style = "display: flex"> Nombre del producto </label>
            <input type="text" name="nombreproducto" required />
            <label  style = "display: flex" >Descripcion</label>
            <input type="text" name="descripcion" required />
            <label  style = "display: flex" >Precio</label>
            <input type="text" name="precio" required />
            <label  style = "display: flex" > Imagen </label>
            <input type="file" name="imagen" />
            <input type="submit" name="submit" value="Ingresar" />
            <label  style = "display: flex" > Imagen1 </label>
            <input type="file" name="imagen1" />
            <input type="submit" name="submit" value="Ingresar" />
            <label  style = "display: flex" > Imagen2 </label>
            <input type="file" name="imagen2" />
            <input type="submit" name="submit" value="Ingresar" />
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
          </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- LISTA DE TODOS LOS PRODUCTOS -->
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
        </tr>
    <?php } ?>
    </table>
  <script src="assets/javascript/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>
</html>
