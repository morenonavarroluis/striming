<?php

include "conexion.php";

$id = $_POST['id_persona'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$cargo = $_POST['cargo'];
$gerencia = $_POST['gerencia'];



// Actualizar la persona en la base de datos

$sql = "UPDATE personas SET nombre='$nombre', apellido='$apellido', cedula='$cedula', cargo='$cargo', gerencia='$gerencia' WHERE id_persona='$id'";
$resultado = mysqli_query($conn, $sql);
if ($resultado) {
       echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Se ha editado la persona correctamente',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../personas_admin');
              });
    });
        </script>";
} else {
       echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'a ocurrido un error al editar la persona',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../personas_admin');
              });
    });
        </script>";
}

?>