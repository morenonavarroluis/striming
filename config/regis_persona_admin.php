<?php

include "conexion.php";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$cargo = $_POST['cargo'];
$gerencia = $_POST['gerencia'];


$consultar = "SELECT * FROM personas WHERE cedula = '$cedula'";

$resultado_consulta = mysqli_query($conn, $consultar);

if (mysqli_num_rows($resultado_consulta) > 0) {
    echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'La cédula ya está registrada',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../personas_admin');
              });
    });
        </script>";
    exit();
}else{

// Consulta para insertar los datos en la tabla personas
$query = "INSERT INTO personas (nombre, apellido, cedula, cargo, gerencia) 
          VALUES ('$nombre', '$apellido', '$cedula', '$cargo', '$gerencia')";

if (mysqli_query($conn, $query)) {
         echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Se ha registrado el usuario correctamente',
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
                title: 'Error al registrar la persona',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../personas_admin');
              });
    });
        </script>";
}


}

?>