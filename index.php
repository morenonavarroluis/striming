<?php
 
 //conexion
include "config/conexion.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();

}
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
                        <h1 class="mt-4">Videos</h1>
                       
                       <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal" style="float: right;">Nuevo Video</button>
                            <br>
                            <br>

                        <div class="card mb-4">
                                       
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr style="color:blue;">
                                            <th>Nombre</th>
                                             <th>Ruta</th>
                                            <th>Fecha y Hora</th>
                                            <th>opcion</th>   
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                      <?php   while ($row = mysqli_fetch_assoc($resultado)) { ?>
                                        <tr>
                                            <td><?php echo $row['video_name']; ?></td>
                                            <td><?php echo $row['location']; ?></td>
                                            <td><?php echo $row['fecha']; ?></td>
                                             <td class="text-center">
                                              <form action="config/eliminar_videos.php" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $row['video_id']; ?>">
                                                    <input type="hidden" name="name" value="<?php echo $row['video_name']; ?>">
                                                    <button type="submit" class="btn btn-danger center">Eliminar</button>
                                                </form>
                                            </td>
                                           
                                        </tr>
                                       
                                         <?php   } ?>
                           
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include 'base/footer.php'; ?>
            </div>
        </div>
     <?php include 'base/scrit.php'; ?>
    </body>
</html>
