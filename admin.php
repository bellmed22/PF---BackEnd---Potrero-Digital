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

            <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        
    
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    
    
    
        <!-- Local -->
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/servicios.css">
        <link rel="stylesheet" href="./css/gestion.css">
    
        <!-- FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    
    
    </head>
  <body>

  <!-- HEADER -->

<?php include("header_admin.php") ?> <!-- Header --> 

<!-- PRODUCTOS -->

      <section class="section-white"> 
        <div class="container">
        <div class="table-wrapper">
          <div class="table-title">
        <h2>Gestión de <b>productos</b></h2> 
        <a href="agregar.php" class="btn btn-success agregarbtn"><i class="material-icons">&#xE147;</i> <span>Ingresar producto</span></a>  

					    <div class="row">

              <div class="col-sm-6"> 

              </div>                     
            </div>
          </div>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <!-- <th>
                  <span class="custom-checkbox">
                       <input type="checkbox" id_producto="selectAll">
                        <etiqueta for="selectAll"></etiqueta>
                        </span>-->
                </th> 
                <!-- <th>Categorias</th>-->
                <th>ID</th>               
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Descripción</th>
                <th>Precio</th>     
                <th>Acciones</th> 
              </tr>
            </thead>
            <tbody>
              <tr>  
              </style>
<script>
function eliminarProducto(id) {
  if (confirm("Esta seguro que desea eliminar el producto?") == true) {
    window.location.href = "./eliminar_producto.php?id="+id;
  }
}
</script>
                 <?php                      
                        $query = "SELECT * FROM productos";

                        $resultado = mysqli_query($conexion, $query);

                        while($fila = mysqli_fetch_assoc($resultado)){
                            echo "<tr>";
                            //echo "<td>
                            //<span class='custom-checkbox'>
                            //                <input type='checkbox' id_producto='checkbox1' name='options[]' value='1'>
                            //                <etiqueta for='checkbox1'></etiqueta>
                            //                </span></td>";
                                echo "<td>".$fila["id_producto"]."</td>";
                                echo "<td>".$fila["nombre_producto"]."</td>";
                                echo "<td>".$fila["tipo_producto"]."</td>";
                                echo "<td>".$fila["descripcion_producto"]."</td>";
                                echo "<td>".$fila["precio_producto"]."</td>";
                                echo "<td>
                                  <a href='./editar_producto.php?id_producto=".$fila["id_producto"]."'><i class='material-icons' data-toggle='tooltip' title='Editar'>&#xE254;</i></a>
                                  <a href='javascript:void(0);' onclick='eliminarProducto(".$fila["id_producto"].")' class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a>";                            
                                      // <a href='./editar_producto.php?id=".$fila["id_producto"]."'><i class='material-icons' data-toggle='tooltip' title='Editar'>&#xE254;</i></a>                                              
                                     // onclick='return confirm('¿Desea editar este producto?')'
                                     //onclick='return confirm('¿Desea edliminar este producto?')'
                                echo "</tr>";
                        }
                        mysqli_close($conexion);
                    ?> 
                </td>               
              </tr>
              <tr>                     
              </tr>
            </tbody>
          </table>        
          
          <!-- PAGINACIÓN 
          <div class="clearfix">
            <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
            <ul class="pagination">
              <li class="page-item disabled"><a href="#">Previous</a></li>
              <li class="page-item"><a href="#" class="page-link">1</a></li>
              <li class="page-item"><a href="#" class="page-link">2</a></li>
              <li class="page-item active"><a href="#" class="page-link">3</a></li>
              <li class="page-item"><a href="#" class="page-link">4</a></li>
              <li class="page-item"><a href="#" class="page-link">5</a></li>
              <li class="page-item"><a href="#" class="page-link">Next</a></li>
            </ul>
          </div>
        </div>
      </div>
      FIN PAGINACIÓN -->       
      
  
  </section>
     
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
    <script src="js/gestion.js"></script>
</body>

</html>