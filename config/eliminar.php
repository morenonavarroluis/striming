<?php

    include "conexion.php";
   $id = $_POST['id'];

    // Consulta para eliminar el usuario
    $consulta = "DELETE FROM users WHERE `id` = '$id'";

    // Ejecutar la consulta
    if (mysqli_query($conn, $consulta)) {
        echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'El usuario ha sido eliminado correctamente',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../datos_user.php');
              });
    });
        </script>";
        exit();
    } else {
        echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Error al eliminar el usuario',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../datos_user.php');
              });
    });
        </script>";
    }

    // Cerrar la conexión
    mysqli_close($conn);