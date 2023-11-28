<?php

include 'conexion.php';

$id_producto = $_REQUEST['id_producto'];
$nombre_producto = $_REQUEST['nombre_producto'];
$tipo_producto = $_REQUEST['tipo_producto'];
$descripcion_producto = $_REQUEST['descripcion_producto'];
$precio_producto = $_REQUEST['precio_producto'];

$query = "UPDATE productos SET nombre_producto='$nombre_producto', tipo_producto='$tipo_producto', descripcion_producto='$descripcion_producto', precio_producto='$precio_producto' WHERE id_producto = '$id_producto'";

if (mysqli_query($conexion, $query)) {
    echo "Producto actualizado con éxito!";
    header('Location: admin.php');
} else {
    echo "Hubo un error en la: " . mysqli_error($conexion);
    header('Location: admin.php');
}

mysqli_close($conexion);

?>