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
        
    
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    
    
    
        <!-- Local -->
        <link rel="stylesheet" href="./css/login.css">
    
        <!-- FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    
    
    </head>
  <body>
    <div class="login-container">
        <div class="login-box">
          <div class="login-box-content">



            <img class="front" src="./assets/sliderfront1.png" alt="blm">
            <h1 class="title">ilus/tore</h1>
            <h4 class="subtitle">Bienvenidus</h4>         
            
            
<?php
include 'conexion.php';

if(isset($_POST['login_admin'])) {

// Obtener los valores enviados por el formulario
$nombre_admin = $_POST['nombre_admin'];
$password_admin = $_POST['password_admin'];

// Ejecutamos la consulta a la base de datos utilizando la función mysqli_query
$query = "SELECT * FROM administrador WHERE nombre_admin = '$nombre_admin' and password_admin = '$password_admin'";
$resultado = mysqli_query($conexion,$query);
$numero_registros = mysqli_num_rows($resultado);
	if($numero_registros != 0) {

		echo "Inicio de sesión exitoso.";
    header('Location: admin.php');
	} else {

		echo "Credenciales inválidas. Por favor, verifica tus datos."."<br>";
	}
}
?>

        <form method="post" action="">
            <label for="nombre_admin">Nombre</label><br>  
            <input type="text" name="nombre_admin" autocomplete="off" placeholder="Usuario"/><br>  
            <label for="password_admin">Contraseña</label><br>  
            <input type="password" name="password_admin" placeholder="Contraseña"/><br>  <br> 
            <button name="login_admin">Ingresar</button> 
</form>          
          </div>
        </div>
      </div>

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Main Js -->
    <script src="js/main.js"></script>
</body>

</html>