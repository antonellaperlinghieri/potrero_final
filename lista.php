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
</head>
<body>
    <h1>MUEBLERIA</h1>
    <h2>Lista de productos</h2>
    <p>La siguiente lista muestra los datos de los productos actualmente en stock.</p>
    <table>
    <tr>
        <th>ID</th>
        <th>NOMBRE_PRODUCTO</th>
        <th>DESCRIPCION</th>
        <th>PRECIO</th>
        <th>IMAGEN</th>
        <th>IMAGEN1</th>
        <th>IMAGEN2</th>
    </tr>
    <?php
    // 1) Conexion
    include "php/conexion.php";
    mysqli_select_db($conexion, "tienda1");

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
</body>
</html>