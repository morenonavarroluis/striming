<?php

include "conexion.php";
$id = $_POST['id'];
$name = $_POST['name'];


 $query = "UPDATE video SET video_name='$name'  WHERE video_id=$id";

 
 if(mysqli_query($conn, $query)){

     echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'El Nombre ha sido editado correctamente',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../usuario');
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
                title: 'Error al editar el Nombre',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../usuario');
              });
    });
        </script>";

 }


