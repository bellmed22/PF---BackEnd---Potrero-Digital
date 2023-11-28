<?php
    if(isset($_POST['agregar'])){
        $conexion = mysqli_connect("localhost:3306", "root", "", "servicios");

        $nombre_producto= $_POST['nombre_producto'];
        $tipo_producto = $_POST['tipo_producto'];
        $descripcion_producto= $_POST['descripcion_producto'];   
        $precio_producto= $_POST['precio_producto'];   


        $query = "INSERT INTO productos(nombre_producto, tipo_producto, descripcion_producto, precio_producto) VALUES ('$nombre_producto', '$tipo_producto', '$descripcion_producto', '$precio_producto')";
        $resultado = mysqli_query($conexion, $query);

        if($resultado  === true){
            echo "<p>Se agrego el producto correctamente!</p>";
            header('Location: admin.php');
        }
        else{
            echo "<p>Hubo un error, vuelva a intentarlo nuevamente!</p>";        
            header('Location: admin.php');
        }

        mysqli_close($conexion);
    }
?>

