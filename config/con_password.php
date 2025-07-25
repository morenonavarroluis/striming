<?php

include "conexion.php";

session_start(); // Asegúrate de iniciar la sesión

$sesi = $_SESSION['id'];

$actual_password = $_POST['actual_password'];
$actual_sha1_password = sha1($actual_password);

// Usar una consulta preparada para evitar inyecciones SQL
$compara = "SELECT password FROM users WHERE password = ? AND id = ?";
$stmt = $conn->prepare($compara);
$stmt->bind_param("si", $actual_sha1_password, $sesi);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
  
    if ($new_password === $confirm_password) {
        $new_sha1_password = sha1($new_password);
        
        $update_query = "UPDATE users SET password = ? WHERE id = ?";
        $update_stmt = $conn->prepare($update_query);
        $update_stmt->bind_param("si", $new_sha1_password, $sesi);
        
        if ($update_stmt->execute()) {
            echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'se a cambiado la contraseña correctamente',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../cambio_pass_con');
              });
    });
        </script>";
        } else {
              echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'error al cambiar la contraseña' . $conn->error,
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../cambio_pass_con');
              });
    });
        </script>"; 
        }
    } else {
           echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'las contraseñas no coinciden',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../cambio_pass_con');
              });
    });
        </script>"; 
    }
} else {
       echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'la contraseña actual es incorrecta',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../cambio_pass_con');
              });
    });
        </script>"; 
}

// Cerrar las declaraciones


// Mostrar el mensaje (puedes adaptarlo según tu lógica de presentación)
echo $message;

?>
