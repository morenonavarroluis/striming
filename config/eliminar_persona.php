<?php

    include "conexion.php";
   $id = $_POST['id_persona'];

    // Consulta para eliminar el usuario
    $consulta = "DELETE FROM personas WHERE `id_persona` = '$id'";

    // Ejecutar la consulta
    if (mysqli_query($conn, $consulta)) {
        echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'La persona ha sido eliminada correctamente',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../personas_admin');
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
                title: 'Error al eliminar la persona',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../personas_admin');
              });
    });
        </script>";
    }

    // Cerrar la conexión
    mysqli_close($conn);