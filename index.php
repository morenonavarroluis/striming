<?php
//conexion
include "config/conexion.php";
session_start();
if (!isset($_SESSION['id_rol'])) {
    header("Location: login.php");
}


// variables de paginación
$videos_per_page = 4; // Número de vídeos a mostrar por página
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page
$offset = ($page - 1) * $videos_per_page; // Calculate offset

// Total number of videos
$total_videos_query = mysqli_query($conn, "SELECT COUNT(*) as total FROM `video`");
$total_videos = mysqli_fetch_assoc($total_videos_query)['total'];
$total_pages = ceil($total_videos / $videos_per_page); // Total number of pages

// Obtener vídeos de la página actual
$query = mysqli_query($conn, "SELECT video_id,video_name, location FROM `video` ORDER BY `video_id` ASC LIMIT $videos_per_page OFFSET $offset");

include "base/header.php";
?>
<body class="sb-nav-fixed">
    <?php
    include "base/navbar.php";
    include "modal/usuario_regid.php";
    ?>
    <br>
    <br>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Videos</h1>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modalusu" style="float: right;">Nuevo Video</button>
                <br>
                <br>
                <?php while ($fetch = mysqli_fetch_array($query)) { ?>      
                    <div class="card w-55 mx-auto" style="width: 50%; margin: 20px;">
                        <video width="100%" height="240" controls>
                            <source src="<?php echo $fetch['location'] ?>">
                        </video>
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $fetch['video_name'] ?></h5>
                            <form action="config/Eliminar_video_usu.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $fetch['video_id']; ?>">
                                <input type="hidden" name="name" value="<?php echo $fetch['video_name']; ?>">
                                <button type="submit" class="btn btn-danger center">Eliminar</button>
                            </form>
                        </div>
                      
                    </div>
                <?php } ?>

               
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


