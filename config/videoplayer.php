<?php  $query = mysqli_query($conn, "SELECT * FROM `video` ORDER BY `video_id` ASC");  ?>
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