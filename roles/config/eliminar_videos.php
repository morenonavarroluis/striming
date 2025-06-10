<?php

        include "conexion.php";

        $id = $_POST['id'];
        $name = $_POST['name'];
        // Consulta para eliminar el usuario
        $consulta = "DELETE FROM video WHERE `video_id` = '$id'";

        if (mysqli_query($conn, $consulta)) {
            // Ruta del archivo a eliminar
            $ruta_archivo = "../video/" . $name . ".mp4"; // Asegúrate de que el nombre del archivo sea correcto
            echo $ruta_archivo;
            // Verificar si el archivo existe antes de intentar eliminarlo
            if (file_exists($ruta_archivo)) {
                if (unlink($ruta_archivo)) {
                   echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'El archivo se elimino correctamente',
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
                    title: 'Error al eliminar el archivo',
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
                    title: 'El archivo no existe',
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
                    title: 'Error al eliminar de la base de datos',
                    showCancelButton: false,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = 'usuario.php';
                });
            });
            </script>";
        }

    






    // Ejecutar la consulta
    // 
    //     echo "
    //      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    //     <script language='JavaScript'>
    //     document.addEventListener('DOMContentLoaded', function() {
    //         Swal.fire({
    //             icon: 'success',
    //             title: 'Se elimino el video correctamente',
    //             showCancelButton: false,
    //             confirmButtonColor: '#3085d6',
    //             confirmButtonText: 'OK'
    //           }).then(() => {
    //             location.assign('../index.php');
    //           });
    // });
    //     </script>";
    //     exit();
    // } else {
    //     echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    //     <script language='JavaScript'>
    //     document.addEventListener('DOMContentLoaded', function() {
    //         Swal.fire({
    //             icon: 'error',
    //             title: 'Error al eliminar el video',
    //             showCancelButton: false,
    //             confirmButtonColor: '#3085d6',
    //             confirmButtonText: 'OK'
    //           }).then(() => {
    //             location.assign('../index.php');
    //           });
    // });
    //     </script>";
    // }

    // Cerrar la conexión
    mysqli_close($conn);