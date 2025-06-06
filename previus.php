<?php
 
 //conexion
include "config/conexion.php";

//consulta

$consulta = "SELECT id, titulo, duracion, fecha_subida FROM videos";
$resultado = mysqli_query($conn, $consulta);


   

 include "base/header.php";

?>
    <body class="sb-nav-fixed">
       <?php
        include "base/navbar.php";
        include "base/sidebar.php";
        include "modal/regis_modal.php";
        ?>
       
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                      
                       <h1>visualizacion de video</h1>
                        
                    </div>
                </main>
                <?php include 'base/footer.php'; ?>
            </div>
        </div>
     <?php include 'base/scrit.php'; ?>
    </body>
</html>
