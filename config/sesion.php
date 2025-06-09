<?php
require "conexion.php";

 session_start();

//  Verificacion para el inicio de sesion.
if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
// Otro código de tu sistema aquí...
    $sql = "SELECT id, password, username, id_rol FROM users WHERE username ='$username' ";
    $resultado = mysqli_query($conn,$sql);

    $num = $resultado->num_rows;

    // Verifica si el usuario existe en la base de datos
    if ($num > 0) {
        $row = $resultado->fetch_assoc();
        $password_bd = $row['password'];
        $pass_c = sha1($password);
 

        if ($password_bd == $pass_c) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['id_rol'] = $row['id_rol'];
			
           
            $_SESSION['password'] = $row['password'];
           
        //    Comprobación de inicion de sesión y roles
            if (isset($_SESSION['id_rol'])) {
                switch ($_SESSION['id_rol']) {
                   case 1:
                        header("Location: ../index.php");
                        break;
                    case 2:
                        header("Location: ../usuario.php");
                        break;
            
                    default:
        echo  "
        
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Rol no existente',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('../index.php');
              });
    });
        </script>";
    
                        break;
                }

            }
        } else {
            // Envia un mensaje de alerta por si el password no coincide
             echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'La contraseña no coincide',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                      }).then(() => {

                        location.assign('../index.php');

                      });
            });
                </script>";
        }
    } else {
        // Envia un mensaje de alerta por si el usuario no coincide no coincide
        echo "
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script language='JavaScript'>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'El usuario no coincide',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK',
                        timer: 1500
                      }).then(() => {

                        location.assign('../index.php');

                      });
            });
                </script>";
    }
}

// }


?>