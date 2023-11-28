<?php include ("conexion.php");?>

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
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/servicios.css">
     
     <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

    
</head>

<body>
    
    <!-- HEADER -->
    <?php include('header.php')?>   
    <!-- SERVICIOS -->

    <section id="servicios" class="section-white">
        <div class="container">

            <h2>SERVICIOS</h2>
  
            <!-- Tarjetas -->
            <div class="row  justify-content-center justify-items-start">                  
            

               
            <?php 
    $query = "SELECT * FROM productos where tipo_producto = 1";
    $resultado = mysqli_query($conexion, $query);
            echo "<h3 class='prod-cat dis'>Diseño Gráfico</h3>";

        while($fila = mysqli_fetch_assoc($resultado)){
            echo "<figure class='snip1418 dis col-lg-4 col-md-6 col-sm-6 portfolio-item'>
            <div class='add-to-cart'><i class='ion-android-add'></i><span>Comprar ahora</span></div>
            <figcaption>
              <h3>".$fila["nombre_producto"]."</h3>
              <p>".$fila["descripcion_producto"]."</p>
            <div class='price'>".$fila["precio_producto"]."</div>
            </figcaption><a href='·'></a>
            </br>
          </figure>";        
            }

        $query = "SELECT * FROM productos where tipo_producto = 3";
        $resultado = mysqli_query($conexion, $query);
            echo "<h3 class='prod-cat ill'>Ilustración</h3>";

        while($fila = mysqli_fetch_assoc($resultado)){
            echo "<figure class='snip1418 ill col-lg-4 col-md-6 col-sm-6 portfolio-item'>
            <div class='add-to-cart add-to-cart_ill'><i class='ion-android-add'></i><span>Comprar ahora</span></div>
            <figcaption>
              <h3>".$fila["nombre_producto"]."</h3>
              <p>".$fila["descripcion_producto"]."</p>
            <div class='price'>".$fila["precio_producto"]."</div>
            </figcaption><a href='·'></a>
            </br>
          </figure>";        
            }    

            $query = "SELECT * FROM productos where tipo_producto = 2";
            $resultado = mysqli_query($conexion, $query);
                echo "<h3 class='prod-cat web'>Diseño Web</h3>";
    
            while($fila = mysqli_fetch_assoc($resultado)){
                echo "<figure class='snip1418 web col-lg-4 col-md-6 col-sm-6 portfolio-item'>
                <div class='add-to-cart add-to-cart_web'><i class='ion-android-add'></i><span>Comprar ahora</span></div>
                <figcaption>
                  <h3>".$fila["nombre_producto"]."</h3>
                  <p>".$fila["descripcion_producto"]."</p>
                <div class='price'>".$fila["precio_producto"]."</div>
                </figcaption><a href='·'></a>
              </figure>";        
                }  
                
             mysqli_close($conexion);
          ?>


        <!-- Imagen
         <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample85.jpg" alt="sample85"/>
  <!-- Imagen -->

            </div>
        </div>
    </section>
  
    <section id="contact" class="section-black">
        <div class="container">

            <h2>Contacto</h2>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="bi bi-whatsapp"></i>
                        <h3>Whatsapp</h3>
                        <p><a href="ttps://wa.me/543413144624">¡Hablemos!</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:elfylock@proton.me">¡Escribime!</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-map">
                        <iframe class="map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107134.74394039533!2d-60.76667918868166!3d-32.95204571119454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b6539335d7d75b%3A0xec4086e90258a557!2sRosario%2C%20Santa%20Fe!5e0!3m2!1ses-419!2sar!4v1671300589493!5m2!1ses-419!2sar"
                            width="200" height="200" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>

    </section><!-- contacto -->


    <footer id="footer">
        <div class="container">
            <h3>BlM</h3>
            <p>Mi bandeja de mensajes siempre está disponible, ya sea que quieras saludar,
                hacerme una pregunta, invitarme un chocolate,o contratarme <i class="fa fa-grin"></i></p>
            <div class="redes-links">
                <a href="mailto:elfylock@proton.me"><i class="fas fa-envelope"></i></a>
                <a href="https://www.facebook.com/blopezmedina" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/belenlmedina/" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i></a>
                <a href="https://github.com/bellmed22" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-github"></i></a>
            </div>
            <div class="credits">
                Creado por <span style="font-weight:900;"><a href="mailto:elfylock@proton.me">BLM</a></span>
                <br> ©2022
            </div>
        </div>
    </footer><!-- footer -->

    <!-- BTTOP -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i></a> <!-- bttop -->




    <!-- SCRIPTS -->


    <!-- jQuery - JS-->


    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Main Js -->
    <script src="js/main.js"></script>
</body>

</html>