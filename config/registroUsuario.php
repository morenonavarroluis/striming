<?php

include 'conexion.php';
// Obtener los datos del formulario y sanitizarlos
$usuario =$_POST['username'];
$password = $_POST['password'];
$pass_c = sha1($password); // Encriptar la contraseña
$rol = $_POST['rol'];

// Preparar la consulta SQL para insertar el nuevo usuario
$consulta = "INSERT INTO users (id,username, password, id_rol) VALUES (NULL,'$usuario','$pass_c' , '$rol');";

$resultado = mysqli_query($conn, $consulta);
//$resultado = $conn->query($consulta);


if($resultado) {
    // Si la inserción fue exitosa, redirigir a la página de datos_user.php
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
                location.assign('../datos_user.php');
              });
    });
        </script>";

} else {
    // Si hubo un error, mostrar un mensaje de error
            echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Error al registrar el usuario',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../datos_user.php');
              });
    });
        </script>";

}