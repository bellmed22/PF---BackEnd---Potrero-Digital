<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="diseño gráfico, desarrollo web, responsive, UX UI, branding">
    <meta name="description" content="Desarrollo web, diseño, ilustración">
    <meta name="autor" content="BLM">
    <title>Ilustack - Ilustraciones y Desarrollo Web</title>


    <!-- CSS -->
    <!-- Externas -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

        <script type="text/javascript" src="/jquery/jquery-3.6.0.min.js"></script>
        <script src="//code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    

    <!-- Vendor CSS Files 
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Local -->  
    <link rel="stylesheet" href="./css/servicios.css">
    <link rel="stylesheet" href="./css/form.css">
     
     <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    
</head>

<body>

<!-- HEADER -->

<?php include 'header_admin.php';
include 'conexion.php';

$id_producto = $_REQUEST['id_producto'];
$query="SELECT * FROM productos WHERE id_producto ='$id_producto'";
$resultado = mysqli_query($conexion, $query);
$fila = mysqli_fetch_assoc($resultado);

mysqli_close($conexion);
?>

<div class="formulario">
<form action="editar.php?id_producto="<?php echo $fila["id_producto"]; ?>" method="post">
    <h2>Editar <b>producto</b></h2>
    <label for="id_producto">ID</label>
    <input type="text" REQUIRED id="id_producto" name="id_producto" class="campo-input" value="<?php echo $fila['id_producto']; ?>"><br>  
    <label for="nombre_producto">Nombre</label>
    <input type="text" id="nombre_producto" name="nombre_producto" class="campo-input" value="<?php echo $fila['nombre_producto']; ?>"><br>  
    <label for="tipo_producto">Tipo</label>
    <input type="text" id="tipo_producto" name="tipo_producto" class="campo-input" value="<?php echo $fila['tipo_producto']; ?>"><br>  
    <label for="descripcion_producto">Descripción</label>
    <textarea id="descripcion_producto" name="descripcion_producto" class="campo-input"><?php echo $fila['descripcion_producto']; ?></textarea><br>  
    <label for="precio_producto">Precio</label>
    <input type="text" id="precio_producto" name="precio_producto" class="campo-input" value="<?php echo $fila['precio_producto']; ?>"><br>    
    <button name="editar_producto" value="Editar">Guardar</button>    
    <h3><a href="./admin.php">VOLVER</a></h3>
</form>
</div>
