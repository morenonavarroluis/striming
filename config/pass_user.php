<?php

include "conexion.php";

$id = $_POST['id'];
$password = $_POST['password'];
$pass_c = sha1($password);



 $query = "UPDATE users SET  password='$pass_c' WHERE id=$id";


 if(mysqli_query($conn, $query)){

     echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Contraseña actualizada',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../user.php');
              });
    });
        </script>";
        exit();

 }else{

      echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Error al actualizar la contraseña',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../user.php');
              });
    });
        </script>";

 }


