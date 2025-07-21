<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MercalStream</title>
          <link href="css/styles.css" rel="stylesheet" />
        <link href="css/style.min.css" rel="stylesheet" />
      
        <script src="js/all.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="./img/logo.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/nuevo.css">
    </head>
    <body>
        <div id="layoutError">
            <div id="layoutError_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mt-4">
                                    <h1 class="display-1">403</h1>
                                    <p class="lead">No autorizado</p>
                                    <p>Acceso al recurso no autirizado.</p>
                                    <a href="/striming">
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
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2025</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
         <?php
            include "base/script.js";
        ?>
    </body>
</html>
   <td >
  <div class="d-flex justify-content-center"> <!-- Contenedor para centrar los botones -->   
    <form action="config/eliminar.php" method="POST" class="me-2">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <button type="submit" class="btn btn-danger center">Eliminar</button>
         </form>
          <a  class="btn btn-warning text-white me-2" data-bs-toggle="modal" data-bs-target="#Modaleditar<?php echo $row['id']; ?>" href="">Editar</a>
            <a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modaladmin<?php echo $row['id']; ?>" href="">cambiar contraseña</a>
                                            
        </div>
                                            </td>