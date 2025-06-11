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
    <a href="login.php" class="btn btn-outline-primary m-10">Inicio</a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 video-container">
                <h2 class="text-center mb-4">Reproductor de Video</h2>
                <video id="videoPlayer" controls>
                    <source id="videoSource" src="" type="video/mp4">
                    Tu navegador no soporta el elemento de video.
                </video>
                <div class="controls-container">
                    <button onclick="prevVideo()">Anterior</button>
                    <button onclick="nextVideo()">Siguiente</button>
                    <button onclick="togglePlay()">Pausar/Reproducir</button>
                </div>
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
