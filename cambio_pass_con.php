<?php
 
include "config/conexion.php";

            session_start();

            if (!isset($_SESSION['id_rol'])) {
                header("Location: login.php");
                exit();

            }
 include "base/header.php";

?>
    <body class="sb-nav-fixed">
       <?php
        include "base/navbar_consultor.php";
       
        include "modal/modal_usuario.php";
        ?>
       <br>
       <br>
            <div id="layoutSidenav_content">
                <main>
                    
                       
                      <div class="login-container">
        <h2>Cambiar Contraseña</h2>

    

        
        <form action="config/con_password" method="POST">
            <div class="mb-3">
                <input type="password" class="form-control" name="actual_password" placeholder="Contraseña Actual" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="new_password" placeholder="Nueva Contraseña" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirmar Nueva Contraseña" required>
            </div>
            <button type="submit" class="btn btn-primary">Cambiar Contraseña</button>
        </form>
       

       

    </div>
                        
                    
                </main>

                <?php include 'base/footer.php';
                include 'base/scrit.php';
                
                ?>
            </div>
        </div>

     <script src="js/tablas.js"> </script>
    </body>
</html>
