<?php

include "conexion.php";
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$pass_c = sha1($password);
$rol = $_POST['rol'];


 $query = "UPDATE users SET username='$username', password='$pass_c' , id_rol='$rol' WHERE id=$id";
mysqli_query($conn, $query);


