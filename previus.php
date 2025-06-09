<?php
// Conexión
include "config/conexion.php";

$query = mysqli_query($conn, "SELECT * FROM `video` ORDER BY `video_id` ASC") or die(mysqli_error($conn));

include "base/header.php";
?>
<body class="sb-nav-fixed">
   
    
    <div id="layoutSidenav_content">
      <main>
            <div class="container-fluid"> 
                <div class="video-container"> 
                  <video id="videoPlayer" controls>
                        <source id="videoSource" src="" style="width:150%; height: 500px;">
                    
                    </video>
                </div>
                

                    <div class="controls-container"> <button onclick="prevVideo()">Anterior</button>
                        <button onclick="nextVideo()">Siguiente</button>
                        <button onclick="togglePlay()">Pausar/Reproducir</button>
                    </div>
            </div>
    </main>
      
    </div>
</div>

<script>
    const videos = [];
    let currentVideoIndex = 0;

    <?php
    // Generar el array de videos en JavaScript
    while($fetch = mysqli_fetch_array($query)){
        echo "videos.push('".$fetch['location']."');";
    }
    ?>

    const videoPlayer = document.getElementById('videoPlayer');
    const videoSource = document.getElementById('videoSource');

    function loadVideo(index) {
        if (index >= 0 && index < videos.length) {
            videoSource.src = videos[index];
            videoPlayer.load();
            videoPlayer.play();
            currentVideoIndex = index;
        }
    }

    function nextVideo() {
        if (currentVideoIndex < videos.length - 1) {
            loadVideo(currentVideoIndex + 1);
        }
    }

    function prevVideo() {
        if (currentVideoIndex > 0) {
            loadVideo(currentVideoIndex - 1);
        }
    }

    function togglePlay() {
        if (videoPlayer.paused) {
            videoPlayer.play();
        } else {
            videoPlayer.pause();
        }
    }

    // Cargar el primer video al inicio
    loadVideo(currentVideoIndex);

    // Reproducir el siguiente video automáticamente al finalizar
    videoPlayer.addEventListener('ended', nextVideo);
</script>

<?php include 'base/scrit.php'; ?>
</body>
</html>