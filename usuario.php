<?php
// usuario.php

session_start();
// Simulación de usuario logueado
$_SESSION['username'] = $_SESSION['username'] ?? 'UsuarioDemo';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard de Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts y Font Awesome para iconos -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background: #f4f6f8;
            color: #222;
        }
        .sidebar {
            width: 220px;
            background: #22223b;
            color: #fff;
            height: 100vh;
            position: fixed;
            left: 0; top: 0;
            display: flex;
            flex-direction: column;
            padding-top: 30px;
        }
        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
            letter-spacing: 2px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 15px 30px;
            display: flex;
            align-items: center;
            transition: background 0.2s;
            font-size: 1.05em;
        }
        .sidebar a:hover, .sidebar a.active {
            background: #4a4e69;
        }
        .sidebar i {
            margin-right: 15px;
        }
        .main-content {
            margin-left: 220px;
            padding: 40px 30px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 35px;
        }
        .header .user-info {
            display: flex;
            align-items: center;
        }
        .header .user-info i {
            margin-right: 10px;
            color: #4a4e69;
        }
        .card-container {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
        }
        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(34,34,59,0.08);
            padding: 30px 25px;
            flex: 1 1 220px;
            min-width: 220px;
            max-width: 320px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .card i {
            font-size: 2em;
            margin-bottom: 15px;
            color: #4a4e69;
        }
        .card h3 {
            margin: 0 0 10px 0;
            font-size: 1.2em;
        }
        .card p {
            margin: 0;
            color: #555;
        }
        @media (max-width: 800px) {
            .sidebar { width: 60px; }
            .sidebar h2 { display: none; }
            .sidebar a span { display: none; }
            .main-content { margin-left: 60px; }
        }
        @media (max-width: 600px) {
            .main-content { padding: 20px 5px; }
            .card-container { flex-direction: column; gap: 15px; }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Mi Panel</h2>
        <a href="#" class="active"><i class="fas fa-home"></i><span>Inicio</span></a>
        <a href="#"><i class="fas fa-user"></i><span>Perfil</span></a>
        <a href="#"><i class="fas fa-film"></i><span>Mis Películas</span></a>
        <a href="#"><i class="fas fa-cog"></i><span>Configuración</span></a>
        <a href="#"><i class="fas fa-sign-out-alt"></i><span>Salir</span></a>
    </div>
    <div class="main-content">
        <div class="header">
            <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?> 👋</h1>
            <div class="user-info">
                <i class="fas fa-user-circle fa-2x"></i>
                <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <i class="fas fa-film"></i>
                <h3>Películas vistas</h3>
                <p>12</p>
            </div>
            <div class="card">
                <i class="fas fa-heart"></i>
                <h3>Favoritos</h3>
                <p>5</p>
            </div>
            <div class="card">
                <i class="fas fa-clock"></i>
                <h3>Última sesión</h3>
                <p>Hace 2 días</p>
            </div>
        </div>
    </div>
</body>
</html>