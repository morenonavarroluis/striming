<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 403 - No Autorizado</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            background-image: url('https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/623d8776-6b83-4282-99b8-9d2a198ab54e.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        #layoutError {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div id="layoutError">
        <div id="layoutError_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center mt-4 bg-white p-4 rounded shadow" style="background-color: rgba(255,255,255,0.9)">
                                <h1 class="display-1">403</h1>
                                <p class="lead">No autorizado</p>
                                <p>Acceso al recurso no autorizado.</p>
                                <a href="/striming" class="btn btn-primary">
                                    <i class="fas fa-arrow-left me-1"></i>
                                    Regresar al inicio
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutError_footer">
            <footer class="py-4 mt-auto" style="background-color: rgba(248, 249, 250, 0.8)">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2025</div>
                        <div>
                            <a href="#">Política de Privacidad</a>
                            &middot;
                            <a href="#">Términos y Condiciones</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?php
        include "base/scrit.php";
    ?>
</body>
</html>


<div class="card">
                               
                                <div class="card-body">
                                     
                                    <h5 class="card-title text-center"></h5>
                                    <h5 class="card-title text-center"></h5>
                                           <div class="d-flex justify-content-center">
                                            <form action="config/eliminar_videos.php" method="POST" class="me-2">
                                                <input type="hidden" name="id" value="<?php echo $fetch['video_id']; ?>">
                                                <input type="hidden" name="name" value="<?php echo $fetch['video_name']; ?>">
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                            <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modalvideo<?php echo $fetch['video_id']; ?>" >Editar</a>
                                       </div>
                                </div>
                            </div>
