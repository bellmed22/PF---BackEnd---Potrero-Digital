<?php 

    $idProducto = $_GET["id"];
    
    include 'conexion.php';

    $query = "DELETE FROM productos WHERE id_producto = $idProducto";
    $resultado = mysqli_query($conexion, $query);

    if($resultado === true){
        echo "<p>Se elimino el producto correctamente!</p>";
        header('Location: admin.php');
    }
    else{
        echo "<p>Hubo un error, vuelva a intentarlo nuevamente!</p>";
        header('Location: admin.php');
    }

    mysqli_close($conexion);
?>