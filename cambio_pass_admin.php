<?php
 
include "config/conexion.php";

            session_start();

            if (!isset($_SESSION['id_rol'])) {
                header("Location: login.php");
                exit();

            }


 $id = $_SESSION['id']; 



//consulta

$consulta = "SELECT us.id ,us.username, us.password, r.roles FROM users as us
 INNER JOIN rols as r ON us.id_rol = r.id_rols";
// Ejecutar la consulta
$resultado = mysqli_query($conn, $consulta);


   

 include "base/header.php";

?>
    <body class="sb-nav-fixed">
       <?php
        include "base/navbar.php";
       
        include "modal/modal_usuario.php";
        ?>
       <br>
       <br>
            <div id="layoutSidenav_content">
                <main>
                    
                       
                      <div class="login-container">
        <h2>Cambiar Contraseña</h2>

        <?php echo $message; // Display messages here ?>

        
        <form action="config/admin_password" method="POST">
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
