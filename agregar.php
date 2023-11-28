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

<?php include("header_admin.php") ?> 
    
<!-- FORMULARIO --> 

<?php include('agregar_producto.php')?>    

<div class="formulario">
<form method="post" action="">
<h2>Agregar <b>producto</b></h2>
    <label for="nombre_producto">Nombre</label><br>  
    <input type="text" id="nombre_producto" name="nombre_producto" class="campo-input" required><br>  
    <label for="tipo_producto">Tipo</label><br>  
    <input type="text" id="tipo_producto" name="tipo_producto" class="campo-input" required><br>  
    <label for="descripcion_producto">Descripción</label><br>  
    <textarea id="descripcion_producto" name="descripcion_producto" class="campo-input" required></textarea><br>  
    <label for="precio_producto">Precio</label><br>  
    <input type="text" id="precio_producto" name="precio_producto" class="campo-input" required><br>      
    <button name="agregar">Guardar</button>
   <h3><a href="./admin.php">VOLVER</a></h3>
</form>
</div>
