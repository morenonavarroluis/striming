<?php
//conexion
include "config/conexion.php";
session_start();
if (!isset($_SESSION['id_rol'])) {
    header("Location: login.php");
}

$admin = $_SESSION['username'];

// variables de paginación
$videos_per_page = 8; // Número de vídeos a mostrar por página
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page
$offset = ($page - 1) * $videos_per_page; // Calculate offset

// Total number of videos
$total_videos_query = mysqli_query($conn, "SELECT COUNT(*) as total FROM `video`");
$total_videos = mysqli_fetch_assoc($total_videos_query)['total'];
$total_pages = ceil($total_videos / $videos_per_page); // Total number of pages

// Obtener vídeos de la página actual
$query = mysqli_query($conn, "SELECT video_id,video_name,fecha, location FROM `video` ORDER BY `video_id` DESC LIMIT $videos_per_page OFFSET $offset");

include "base/header.php";
?>
<body class="sb-nav-fixed">
    <?php
    include "base/navbar.php";
    include "modal/regis_modal.php";
    ?>
    <br>
    <br>
    <div id="layoutSidenav_content">
     
    <main>

            <div class="container-fluid px-4">
                <h3 class="mt-4">MercalStream-videos</h3>   
              <button class="btn btn-primary mt" data-bs-toggle="modal" data-bs-target="#exampleModal" style="float: right;">Nuevo Video</button>
                <br>
                <br>
            <div class="container d-flex justify-content-center">
                <div class="row">
                    <?php while ($fetch = mysqli_fetch_array($query)) { ?>      
                        <div class="card" style="width: 18rem; margin: 5px;">
                               <video width="100%" height="240" controls>
                                    <source src="<?php echo $fetch['location'] ?>">
                                </video>
                              
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item text-center"><?php echo $fetch['video_name'] . ' - ' . $fetch['fecha']; ?></li>
                                    
                                </ul>
                                <div class="card-body d-flex justify-content-center">
                                <a href="" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#Modalvideo<?php echo $fetch['video_id']; ?>" >Editar</a>
                                <form action="config/eliminar_videos" method="POST" class="me-2">
                                    <input type="hidden" name="id" value="<?php echo $fetch['video_id']; ?>">
                                    <input type="hidden" name="name" value="<?php echo $fetch['video_name']; ?>">
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                                  
                                </div>
                        </div>
                     <?php include "modal/modal_video.php"; } ?>
                </div>
            </div>

                <!-- Enlaces de paginación -->
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <?php if ($page > 1): ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?php echo $page - 1; ?>">Anterior</a>
                            </li>
                        <?php endif; ?>

                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                        <?php endfor; ?>

                        <?php if ($page < $total_pages): ?>
                            <li class="page-item">
                                <a class="page-link" href="?page=<?php echo $page + 1; ?>">Siguiente</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </main>
        <?php include 'base/footer.php'; ?>
    </div>
</div>
<?php include 'base/scrit.php'; ?>
</body>
</html>



                       
                                       
                          
                    
                