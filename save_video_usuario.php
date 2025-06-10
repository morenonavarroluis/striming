<?php
date_default_timezone_set('America/Caracas');

require_once 'config/conexion.php';

$fecha = date("Y-m-d");

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $file_name = $_FILES['video']['name'];
    $file_temp = $_FILES['video']['tmp_name'];
    $file_size = $_FILES['video']['size'];

    // File size limit is 50MB
    if ($file_size < 50000000) {
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');

        if (in_array($file_ext, $allowed_ext)) {
            $location = 'video/';
            $target_file = $location . $file_name;  // Include the file name in the destination

            if (move_uploaded_file($file_temp, $target_file)) {
                // Use prepared statements to prevent SQL injection
                // Assuming video_id is AUTO_INCREMENT, so no need to insert 'NULL'
                $sql = "INSERT INTO `video`(`video_name`, `location`, `fecha`) VALUES (?, ?, ?)";
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, "sss", $name, $target_file, $fecha);

                if (mysqli_stmt_execute($stmt)) {
                    echo "
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Se ha subido el video correctamente',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            window.location.href = 'usuario.php';
                        });
                    });
                    </script>";
                } else {
                    echo "
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al guardar en la base de datos',
                            text: '" . mysqli_error($conn) . "', // Display MySQL error
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            window.location.href = 'usuario.php';
                        });
                    });
                    </script>";
                }
                mysqli_stmt_close($stmt); // Close the statement
            } else {
                echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al subir el video',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href = 'usuario.php';
                    });
                });
                </script>";
            }
        } else {
            echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'El formato no es de video',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = 'usuario.php';
                });
            });
            </script>";
        }
    } else {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El video es muy grande',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = 'usuario.php';
            });
        });
        </script>";
    }
}
?>
