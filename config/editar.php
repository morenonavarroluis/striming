<?php

include "conexion.php";
$id = $_POST['id'];
$username = $_POST['username'];
$rol = $_POST['rol'];
if ($rol) {
     $query = "UPDATE users SET username='$username' WHERE id=$id";
     if(mysqli_query($conn, $query)){

     echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'El usuario ha sido editado correctamente',
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
                title: 'Error al editar el usuario',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../user.php');
              });
    });
        </script>";

 }
}else{



 $query = "UPDATE users SET username='$username' , id_rol='$rol' WHERE id=$id";

 
 if(mysqli_query($conn, $query)){

     echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'El usuario ha sido editado correctamente',
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
                title: 'Error al editar el usuario',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../user.php');
              });
    });
        </script>";

 }
}

