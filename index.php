<?php
// Conexión
include "config/conexion.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reproductor de Video</title>
    <!-- Enlace a Bootstrap CSS (puedes usar un CDN o descargar los archivos) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/nuevo.css">
<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
</head>
<body class="fondo">
    
    <div class="flex-container">
        <div class="row justify-content-center">
            <div class="video-container">
                <img src="img/logo.png" class= "logo" alt="">
                <video id="videoPlayer" controls>
                    <source id="videoSource" src="" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
              <a href="login.php" class="btn btn-primary m-auto boton">Inicio</a>
            </div>
            
        </div>
    </div>

    <!-- Enlace a Bootstrap JS y jQuery (necesarios para algunas funcionalidades de Bootstrap) -->
     <?php  include "config/videoplayer.php";  ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
