<?php
	date_default_timezone_set('America/Caracas');
	
	require_once 'config/conexion.php';
	
	$fecha = date("Y-m-d");


	if(ISSET($_POST['save'])){
		$file_name = $_FILES['video']['name'];
		$file_temp = $_FILES['video']['tmp_name'];
		$file_size = $_FILES['video']['size'];
		
		if($file_size < 50000000){
			$file = explode('.', $file_name);
			$end = end($file);
			$allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');
			if(in_array($end, $allowed_ext)){
				$name = date("Ymd").time();
				$location = 'videos/'.$name.".".$end;
				if(move_uploaded_file($file_temp, $location)){
					mysqli_query($conn, "INSERT INTO `video` VALUES('', '$name', '$location','$fecha')") or die(mysqli_error());
					  echo "
							<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
							<script language='JavaScript'>
							document.addEventListener('DOMContentLoaded', function() {
								Swal.fire({
									icon: 'success',
									title: 'Se ha subido el video correctamente',
									showCancelButton: false,
									confirmButtonColor: '#3085d6',
									confirmButtonText: 'OK'
								}).then(() => {
									location.assign('index.php');
								});
						});
							</script>";
				}
			}else{
				  echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'El formato no es de video',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('index.php');
              });
    });
        </script>";
			}
		}else{
			  echo "
         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'El video es muy grande',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then(() => {
                location.assign('index.php');
              });
    });
        </script>";
		}
	}
?>