<?php
 
 //conexion
include "config/conexion.php";




//consulta

$consulta = "SELECT video_id, video_name, location, fecha FROM video";
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
                      <br>
                      <br>
                      <br>
                        <center>
                        <div class="video-container">
                            <video id="video-player" controls>
                               
                                <source src="<?php echo $row['location']; ?>" type="video/mp4" autopley>
                                Your browser does not support the video tag.
                            
                            </video>
                        </div>

                    
                        <button id="next-button">Siguiente</button>
                    </center>    
                    </div>
                </main>
                <?php include 'base/footer.php'; ?>
            </div>
        </div>
     <?php include 'base/scrit.php'; ?>
    </body>
</html>
