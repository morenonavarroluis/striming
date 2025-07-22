<?php
// Conexión
include "config/conexion.php";
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['id_rol'])) {
    header("Location: login.php");
    exit(); // Asegurarse de que no se ejecute más código después de redirigir
}

include "base/header.php";
?>
<body class="sb-nav-fixed">
    <?php
    include "base/navbar2.php";
    include "modal/registro_usu.php";
    ?>
    <br><br>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4 text-center">Cambio de Contraseña</h1>
            
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="config/cambiar_contrasena.php" method="POST">
                            <div class="mb-3">
                                <label for="current_password" class="form-label">Contraseña Actual</label>
                                <input type="password" class="form-control" id="current_password" name="current_password" required>
                            </div>
                            <div class="mb-3">
                                <label for="new_password" class="form-label">Nueva Contraseña</label>
                                <input type="password" class="form-control" id="new_password" name="new_password" required>
                            </div>
                            <div class="mb-3">
                                <label for="repeat_password" class="form-label">Repetir Contraseña</label>
                                <input type="password" class="form-control" id="repeat_password" name="repeat_password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Cambiar Contraseña</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'base/footer.php'; ?>
    </div>
</div>
<?php include 'base/script.php'; ?>
</body>
</html>
