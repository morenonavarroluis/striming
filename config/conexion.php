<?php

$conn = mysqli_connect('localhost','root','','video_admin') or die('Error de conexión a la base de datos');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

